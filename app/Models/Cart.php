<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['msp', 'image', 'price', 'product_id', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
    public function order(){
        return $this->hasOne(Order::class);
    }
}
