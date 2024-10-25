<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Auction;
use Carbon\Carbon;

class UpdateAuctionEndPrice extends Command
{
    protected $signature = 'auction:update-end-price';
    protected $description = 'Update the end price for auctions when they end';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Lấy các phiên đấu giá đã hết hạn nhưng chưa được cập nhật end_price
        $auctions = Auction::where('end_date', '<=', Carbon::now())
                           ->whereNull('end_price') // Chỉ lấy các auction chưa cập nhật end_price
                           ->get();

        foreach ($auctions as $auction) {
            // Lấy bid cao nhất của auction
            $highestBid = $auction->bids()->orderBy('bid_amount', 'desc')->first();

            // Nếu có ít nhất một bid
            if ($highestBid) {
                // Cập nhật end_price thành bid cao nhất
                $auction->end_price = $highestBid->bid_amount;
            } else {
                // Nếu không có bid nào, end_price sẽ là start_price
                $auction->end_price = $auction->start_price;
            }

            // Lưu lại auction
            $auction->save();
        }

        $this->info('Auction end prices have been updated.');
    }
}
