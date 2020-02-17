<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     *  Get all of the paypal that are assigned to this subscriber [User]
     */
    public function paypals()
    {
        return $this->morphedByMany(PaypalPaymentGate::class, 'paymentable');
    }

    /**
     *  Get all of the coupons that are assigned to this subscriber [User]
     */
    public function coupons()
    {
        return $this->morphedByMany(CouponPaymentGate::class, 'paymentable');
    }

    /**
     *  Get all of the credits that are assigned to this subscriber [User]
     */
    public function credits()
    {
        return $this->morphedByMany(CreditPaymentGate::class, 'paymentable');
    }
}
