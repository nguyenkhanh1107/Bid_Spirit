<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class DetailsController extends Controller
{
    public function index($id)
    {
        // Lấy sản phẩm theo ID
        $item = Item::with('auction')->findOrFail($id);
        // Lấy bid cao nhất của auction
        $highestBid = Bid::where('auction_id', $item->auction->id)->orderBy('bid_amount', 'desc')->first();

        // Lấy bid cao nhất của user đang đăng nhập
        $userHighestBid = null;
        if (Auth::check()) {
            $userHighestBid = Bid::where('auction_id', $item->auction->id)
                ->where('user_id', Auth::id())
                ->orderBy('bid_amount', 'desc')
                ->first();
        }

        // Trả dữ liệu về trang chi tiết sản phẩm
        return view('pages.detailspage', compact('item', 'highestBid', 'userHighestBid'));
    }
}
