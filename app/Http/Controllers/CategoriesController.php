<?php
namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Auction;
use Carbon\Carbon; // Sử dụng đúng namespace của Carbon
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        // Lấy tất cả các items kèm theo thông tin phiên đấu giá
        $items = Item::with('auction')->get();

        // Lặp qua các item để tính toán thời gian đấu giá và trạng thái
        foreach ($items as $item) {
            $auction = $item->auction; // Mỗi item có một auction liên kết

            if ($auction) {
                $now = Carbon::now();

                // Chuyển đổi start_date và end_date thành đối tượng Carbon
                $startDate = Carbon::parse($auction->start_date);
                $endDate = Carbon::parse($auction->end_date);

                // Kiểm tra nếu đấu giá đã kết thúc
                if ($now->greaterThan($endDate)) {
                    // Cập nhật trạng thái đấu giá nếu nó vẫn đang 'active'
                    if ($auction->status == 'active') {
                        $auction->status = 'closed';
                        $auction->save();
                    }
                }
                // Kiểm tra nếu đấu giá đang diễn ra
                elseif ($now->greaterThan($startDate) && $now->lessThan($endDate)) {
                    if ($auction->status == 'pending') {
                        $auction->status = 'active';
                        $auction->save();
                    }
                }
                // Đấu giá chưa bắt đầu
                else {
                    if ($auction->status != 'pending') {
                        $auction->status = 'pending';
                        $auction->save();
                    }
                }
            }
        }

        // Truyền dữ liệu đã xử lý vào view
        return view('pages.categoriespage', compact('items'));
    }
}
