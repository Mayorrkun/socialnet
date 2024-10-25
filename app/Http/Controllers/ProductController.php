<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
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
        $items = 0;
        if($user){
            $items = CartItems::where('cart_id',$user->cart_id)->count();
        }
        return view ('user.product',compact('product','categories','user','items'));
    }
}
