<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Cart;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['first_name','last_name','email','password','cart_id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function boot(){

        parent::boot();
        
        static::created(function ($user){
            if(!$user->cart()->where('status','active')->exists()){
               $cart = Cart::create([
                    'user_id'=> $user->id,
                    'status' => 'active',
                ]);

            $user->update(["cart_id"=> $cart->id]);
            }
            
        });
    }

    public function cart(){
       // dd($this);
        return $this->hasOne(Cart::class);
    }

}
