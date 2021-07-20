<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'member';

    protected $fillable = [
        'member_no', 'name', 'email', 'password', 'phone', 'photo', 'is_blocked', 
        'activation_token', 'activated_at', 'forgot_password_token'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'activated_at' => 'datetime',
    ];

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function getStatusBlockedAttribute()
    {
        return $this->is_blocked === 0 ? 
            '<span class="label label-danger">Inactive</span>' : 
            '<span class="label label-primary">Active</span>';
    }

    public static function getMemberNumber()
    {
        $last = self::orderByDesc('id')->first();
        if(!$last)
            return "1" . str_pad('1', 9, '0', STR_PAD_LEFT);

        return "1" . str_pad(($last->id + 1), 9, '0', STR_PAD_LEFT);
    }
}
