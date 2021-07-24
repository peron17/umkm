<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;

    protected $table = 'element';

    protected $fillable = [
        'element_position_id', 'type', 'value'
    ];

    public function elementPosition()
    {
        return $this->belongsTo(ElementPosition::class, 'element_position_id');
    }
}
