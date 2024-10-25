<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.homepage');
    }

    public function indexPageAuction()
    {
        // Lấy danh sách tất cả các phiên đấu giá
        $auctions = Auction::all(); // Lấy tất cả auctions để kiểm tra

        // Kiểm tra và cập nhật trạng thái các phiên đấu giá
        foreach ($auctions as $auction) {
            $now = Carbon::now();

            if ($now->greaterThan($auction->end_date)) {
                if ($auction->status == 'active') {
                    // Lấy bid cao nhất và cập nhật end_price
                    $highestBid = Bid::where('auction_id', $auction->id)->orderBy('bid_amount', 'desc')->first();
                    if ($highestBid) {
                        $auction->end_price = $highestBid->bid_amount;
                    }
                    $auction->status = 'closed';
                    $auction->save();
                }
            }
        }

        // Lấy danh sách các auction có status là 'active' để hiển thị cho user
        $activeAuctions = Auction::where('status', 'active')->get();

        // Trả về view với danh sách các phiên đấu giá 'active'
        return view('pages.homepage', compact('auctions', 'activeAuctions'));
    }

    public function dashboard()
    {
        return view('admin.index');
    }

}
