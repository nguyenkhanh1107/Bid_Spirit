<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * Các thuộc tính có thể thêm/sửa.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'starting_price',
        'category_id',
        'bid_count',
    ];

    /**
     * Quan hệ với bảng Category.
     * Mỗi Item thuộc về một Category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Quan hệ với bảng Bid.
     * Mỗi Item có nhiều lượt đặt giá (Bids).
     */
    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    /**
     * Accessor để tính tổng bid_amount.
     * Sử dụng: $item->bid_count.
     */
    public function getBidCountAttribute()
    {
        return $this->bids()->sum('bid_amount');
    }
}
