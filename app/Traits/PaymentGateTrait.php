<?php


namespace App\Traits;


use App\Models\User;

trait PaymentGateTrait
{
    /**
     * Get all of the subscribers for current payment gate
     */
    public function users()
    {
        return $this->morphToMany(User::class, 'paymentable');
    }
}
