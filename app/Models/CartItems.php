<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;

    protected $fillable = ['cart_id','product_id','quantity','price'];

    public function cart(){
       return  $this->belongsToMany(Cart::class);
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }

}
