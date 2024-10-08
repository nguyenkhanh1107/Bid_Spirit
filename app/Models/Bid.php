<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    /**
     * Các thuộc tính có thể thêm/sửa.
     *
     * @var array
     */
    protected $fillable = [
        'auction_id',
        'user_id',
        'bid_amount',
    ];

    /**
     * Quan hệ với bảng Auction.
     * Mỗi lần đặt giá (Bid) thuộc về một phiên đấu giá (Auction).
     */
    public function auction()
    {
        return $this->belongsTo(Auction::class);
    }

    /**
     * Quan hệ với bảng User.
     * Mỗi lần đặt giá (Bid) được thực hiện bởi một người dùng (User).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Quan hệ với bảng Item thông qua bảng Auction.
     * Mỗi lần đặt giá thuộc về một Item thông qua phiên đấu giá.
     */
    public function item()
    {
        return $this->hasOneThrough(Item::class, Auction::class, 'id', 'id', 'auction_id', 'item_id');
    }
}
