<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    //
    public function show(){
        $categories = Category::pluck("title");
        $user = Auth::user();
        $products = Product::all();
       //dd($categories);
        return view("welcome",compact(["categories","user","products"]));
    }

    public function showLogin(){
        return view("auth.login");
    }
    public function showRegister(){
        return view("auth.register");
    }
    public function Login(){
        $validated_attributes = request()->validate([
            "email"=> ['required','email'],
            'password'=> ['required'],
        ]);
        $user = User::where('email',$validated_attributes['email'])->first();

        if($user == null){
            return back()->withErrors(["email"=> 'user does not exist']);
        }
        $password = Hash::check($validated_attributes['password'],$user->password);

        //$validated_attributes['password'] = $password;
       

      
        if($user){
            if($password !== true){
                return back()->withErrors(["password"=> 'wrong password']);
            }

            else{
               Auth::login($user);
               return redirect()->route('home', compact('user'));
            }
        }

        else{
            return back()->withErrors(["email" => 'email does not exist in our records'] );
        }
        
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function Register(){
        $validated_attributes = request()->validate([
            'email' => ['email','required'],
            'first_name' => ['required','string','min:3'],
            'last_name' => ['required','string','min:3'],
            'password' => ['confirmed','required']
        ]);

        $password = Hash::make($validated_attributes['password']);

        $validated_attributes['password'] = $password;

        $existing_user = User::where('email',$validated_attributes['email'])->exists();

        if($existing_user){
            return back()->withErrors(['email' => 'email is already in use']);
        }

        else{ 
            
            $user = User::create($validated_attributes);
            return redirect()->route('login-page');
            }
    }
    public function cart(){
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

            

        }


    }


        

