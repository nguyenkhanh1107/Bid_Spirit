<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use App\Models\Category;
use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AuctionsController extends Controller
{
    // Hiển thị danh sách auctions
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

        // Trả về view với danh sách tất cả các phiên đấu giá và các phiên đấu giá 'active'
        return view('pages.homepage', compact('auctions', 'activeAuctions'));
    }

    public function index()
    {
        // Lấy danh sách tất cả các phiên đấu giá để admin quản lý
        $auctions = Auction::with('item', 'item.category')->get();

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

        // Trả về view với danh sách các phiên đấu giá để admin quản lý
        return view('admin.auction.index', compact('auctions'));
    }

    // Hiển thị form thêm mới auction
    public function create()
    {
        $categories = Category::all();
        return view('admin.auction.create', compact('categories'));
    }

    // Lưu auction mới
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'item_id' => 'required|exists:items,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'step' => 'required|numeric|min:0.01',
            'status' => 'required|in:pending,active,closed',
        ]);

        Auction::create([
            'category_id' => $request->category_id,
            'item_id' => $request->item_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'step' => $request->step,
            'status' => $request->status,
            'start_price' => 0,
            'end_price' => 0,
        ]);

        return redirect()->route('auctions.index')->with('success', 'Auction added successfully!');
    }

    // Hiển thị form chỉnh sửa auction
    public function edit($id)
    {
        $auction = Auction::findOrFail($id);
        $categories = Category::all();
        $items = Item::where('category_id', $auction->item->category_id)->get();
        return view('admin.auction.edit', compact('auction', 'categories', 'items'));
    }

    // Cập nhật auction
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'item_id' => 'required|exists:items,id',
            'start_price' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|in:pending,active,closed',
        ]);

        $auction = Auction::findOrFail($id);
        $auction->update($request->all());

        return redirect()->route('auctions.index')->with('success', 'Auction updated successfully!');
    }

    // Xóa auction
    public function destroy($id)
    {
        $auction = Auction::findOrFail($id);
        $auction->delete();

        return redirect()->route('auctions.index')->with('success', 'Auction deleted successfully!');
    }

    // Lấy items theo category qua AJAX
    public function getItemsByCategory($categoryId)
    {
        $items = Item::where('category_id', $categoryId)->get();
        return response()->json($items);
    }

    public function bidHistory()
    {
        // Lấy tất cả các phiên đấu giá có status là 'active' hoặc 'closed'
        $auctions = Auction::whereIn('status', ['active', 'closed'])->get();

        return view('admin.bid.index', compact('auctions'));
    }

    public function bidDetails($auctionId)
    {
        // Lấy phiên đấu giá theo ID và bao gồm các thông tin bid
        $auction = Auction::with(['bids.user', 'item'])->findOrFail($auctionId);

        // Lấy danh sách các bid theo thứ tự từ mới nhất đến cũ nhất
        $bids = $auction->bids()->orderBy('created_at', 'desc')->get();

        return view('admin.bid.bidHistory', compact('auction', 'bids'));
    }

}
