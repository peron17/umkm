<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $fillable = [
        'date', 'product_id', 'price', 'qty', 'discount', 'total_price'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
