<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;

    protected $fillable = ['cart_id','product_id','quantity','price'];

    public function cart(){
        $this->belongsToMany(Cart::class);
    }

    public function products(){
        $this->hasMany(Product::class);
    }

}
