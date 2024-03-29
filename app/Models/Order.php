<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'phone',
        'status',
        'cart_id',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function cart(){
        return $this->belongsTo(Cart::class);
    }
}
