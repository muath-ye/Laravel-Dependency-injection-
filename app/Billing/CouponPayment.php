<?php


namespace App\Billing;


use App\Contract\Payment;
use App\Models\CouponPaymentGate;
use Illuminate\Support\Str;

class CouponPayment extends BasePayment
{
    private $currency;
    private $discount;

    public function __construct($currency, $discount = null)
    {
        $this->currency = $currency;
        $this->discount = $discount ?? 0;
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }

    public function pay()
    {
        return 'help credit payment';
    }

    public function charge($amount = null, $coupon_number = null)
    {
        $amount = request('amount');
        $coupon_number = request('coupon');

        /**
         * $result array The value comes from query in database
         * TODO: make function to return this array from database
         */
        $result = ['9941016', '4150511']; // needs to string because strict in_array not working

        $condition = in_array($coupon_number, $result, true) ? true : false;

        $inserted_data = [
            'Payment Type'        => 'Coupon',
            'Amount'              => $amount,
            'Discount'            => $condition ? '100% Free' : 0,
            'Currency'            => $this->currency,
            'Coupon Number'       => $coupon_number,
            'Total Charge'        => $amount - ($condition ? $amount : 0)
        ];

        $payment_gate = CouponPaymentGate::create(
            [
                'amount'        => $amount,
                'discount'      => $condition ? '100% Free' : 0,
                'currency'      => $this->currency,
                'coupon_number' => $coupon_number
            ]
        );

        $payment_gate->users()->save(auth()->user());

        return $inserted_data;
    }
}
