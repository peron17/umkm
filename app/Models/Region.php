<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'region';

    protected $fillable = [
        'code', 'name'
    ];

    public $incrementing = false;

    public $timestamps = false;

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
