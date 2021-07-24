<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementPosition extends Model
{
    use HasFactory;

    const TABLE_COLUMNS = [
        'name' => 'Name',
        'description' => 'Description'
    ];

    protected $table = 'element_position';

    protected $fillable = [
        'name', 'description'
    ];

    public function elements()
    {
        return $this->hasMany(Element::class);
    }
}
