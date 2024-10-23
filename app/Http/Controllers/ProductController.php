<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function show($id){
        $user= Auth::user();
        $categories = Category::pluck("title");
        $product = Product::findOrFail($id);

        return view ('user.product',compact('product','categories','user'));
    }
}
