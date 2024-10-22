<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserCartController extends Controller
{
    //
      public function index(){
        Auth::check();
        $user = Auth::user();
        if ($user){

            return view('user.cart',compact('user'));

        }

        else{
           // dd('lol no you have no users yet');
           return redirect()->route('login-page');       }
        }

        public function add_to_cart(){
            $user = Auth::user();



            if ($user){
                
                CartItems::create([
                    'user_id' => $user->id
                ]);

            }

            

        }
}
