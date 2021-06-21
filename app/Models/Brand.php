<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    
    public const BRANDS = [
        'YAMAHA',
        'HONDA',
        'TOYOTA',
        'DAIHATSU',
        'SUZUKI',
        'KIA',
        'NISSAN',
        'CHEVROLET',
        'POLYGON',
        'PACIFIC',
        'BROMPTON',
        'UNITED',
    ];

    protected $table = 'brand';

    protected $fillable = [
        'name', 'slug', 'photo'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
