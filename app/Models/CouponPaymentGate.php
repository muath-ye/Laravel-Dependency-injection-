<?php

namespace App\Models;

use App\Traits\PaymentGateTrait as Payment;
use Illuminate\Database\Eloquent\Model;

class CouponPaymentGate extends Model
{
    use Payment;
    protected $guarded = ['created_at', 'updated_at'];
}
