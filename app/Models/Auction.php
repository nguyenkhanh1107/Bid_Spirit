<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    // Chỉ định bảng 'auctions'
    protected $table = 'auctions';

    // Các cột có thể được thêm/sửa
    protected $fillable = [
        'item_id',
        'start_price',
        'end_price',
        'step',
        'start_date',
        'end_date',
        'status',
    ];

    // Mối quan hệ: Một phiên đấu giá thuộc về một sản phẩm (Item)
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
