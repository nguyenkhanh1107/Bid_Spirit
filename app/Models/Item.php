<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Cho phép thêm các cột này vào bảng
    protected $fillable = [
        'id', 'category_id', 'title', 'bid_count', 'description', 'starting_price', 'image_path',
    ];

    // Quan hệ với bảng Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Quan hệ với bảng User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function auction()
    {
        return $this->hasOne(Auction::class);
    }

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
