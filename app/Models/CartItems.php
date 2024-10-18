<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function cart(){
        $this->belongsTo(Cart::class);
    }

    public function products(){
        $this->hasMany(Product::class);
    }

}
