<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';

    protected $fillable = [
        'order_number', 'member_id', 'total_price', 'recipient_name',
        'recipient_phone', 'recipient_address', 'region_code', 'order_status',
        'account_name', 'account_number', 'bank_account_name', 'paid_amount',
        'transfer_date', 'transfer_file'
    ];

    protected $casts = [
        'transfer_date' => 'date',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_code');
    }

    public function getCastTotalPriceAttribute()
    {
        return 'Rp ' . number_format($this->total_price, 0, ',', '.');
    }

    public function getCastPaidAmountAttribute()
    {
        return 'Rp ' . number_format($this->paid_amount, 0, ',', '.');
    }
}
