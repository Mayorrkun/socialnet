<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\CartItems;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCartController extends Controller
{
    //
      public function index(){
        Auth::check();
        $user = Auth::user();
        $categories = Category::pluck("title");
      

        if ($user->cart){
                 $items = CartItems::where('cart_id',$user->cart_id)->count();
                 // Retrieve the user's cart items along with product details
                $cartItems = CartItems::with('product')
                ->where('cart_id', $user->cart->id)
                ->paginate(10);

          return view('user.cart',compact('user','categories','items','cartItems'));

        }

        else{
           // dd('lol no you have no users yet');
           return redirect()->route('login-page');       }
        }

        public function add_to_cart($productId, $quantity = 1){
            $user = Auth::user();

            $product = Product::findOrFail($productId);

            if ($user){
                $cart = Cart::firstOrCreate(
                    ['user_id' => $user->id, 'status'=>'active'],
                    ['status' => 'active']
                );
                    $cartItem = CartItems::where('cart_id',$cart->id) 
                                                ->where('product_id',$product->id)
                                                ->first();

                    if ($cartItem){
                        $cartItem->quantity += $quantity;
                        $cartItem->save();
                    }
                    else{
                        CartItems::create([
                            'cart_id' => $cart->id,
                            'product_id' => $product->id,
                            'quantity' => $quantity,
                            'price'=>$product->price - ($product->price *$product->discount)/100
                        ]);
                    }
                
                    return redirect()->route('home');

            }

            else{
                return redirect()->route('login-page');
            }

            

        }

        public function remove_from_cart($productId){
            $user = Auth::user();
            $product = Product::findOrFail($productId);

            if ($user->cart){
                $cartItem = CartItems::where('product_id',$productId)->where('cart_id',$user->cart_id)->first();
                

            }
                }
}
