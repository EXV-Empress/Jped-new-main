<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\API\ForgotPasswordNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    //RELATION TO CART // PRODUCTS
    public function carts(){
        return $this->hasMany(Cart::class);
    }
    
    //RELATION TO ADDRESSES
    public function addresses(){
        return $this->hasMany(Address::class);
    }

    //RELATION TO BOUGHT PRODUCTS
    public function bought_products(){
        return $this->hasMany(BoughtProducts::class);
    }

    //RELATION TO CANCELLED PRODUCTS
    public function cancelled_products(){
        return $this->hasMany(CancelledProducts::class);
    }

    //RELATION TO REFUNDED PRODUCTS
    public function refunded_products(){
        return $this->hasMany(RefundedProducts::class);
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_photo'
    ];

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function sendPasswordResetNotification($token)
    {
        $url = 'https://spa.test/forgot-password?token=' . $token;

        $this->notify(new ForgotPasswordNotification($url));
    }

    public function getImageUrlAttribute(){
        return asset('/uploads/profile_images/' .$this->profile_photo);
    }
}
