<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'msp',
        'description',
        'image',
        'price',
        'category_id',
    ];
public function category(){
    return $this->belongsToMany(Category::class);
}
public function comment(){
    return $this->hasMany(Comment::class);
}
public function cart(){
    return $this->belongsToMany(Product::class);
}
}
