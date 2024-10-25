<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Auction;

class AuctionsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Lấy danh sách auctions có trạng thái active
        $auctions = Auction::get()->all();

        // Chia sẻ dữ liệu với tất cả views
        view()->share('auctions', $auctions);

        return $next($request);
    }
}
