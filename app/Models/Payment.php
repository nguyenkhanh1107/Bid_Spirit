<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
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
        'payment_amount',
        'payment_status',
        'payment_date',
    ];

    /**
     * Quan hệ với bảng Auction.
     * Mỗi payment thuộc về một phiên đấu giá (Auction).
     */
    public function auction()
    {
        return $this->belongsTo(Auction::class);
    }

    /**
     * Quan hệ với bảng User.
     * Mỗi payment được thực hiện bởi một người dùng (User).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Kiểm tra xem thanh toán có hoàn thành hay không.
     *
     * @return bool
     */
    public function isCompleted()
    {
        return $this->payment_status === 'completed';
    }

    /**
     * Kiểm tra xem thanh toán có đang chờ xử lý hay không.
     *
     * @return bool
     */
    public function isPending()
    {
        return $this->payment_status === 'pending';
    }

    /**
     * Kiểm tra xem thanh toán có bị thất bại hay không.
     *
     * @return bool
     */
    public function isFailed()
    {
        return $this->payment_status === 'failed';
    }
}
