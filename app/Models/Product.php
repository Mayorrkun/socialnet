<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ["name","description","category_id","img_path",
    "price", "discount","stock"];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function cart(){
        return $this->belongsToMany(CartItems::class);
    }
}
