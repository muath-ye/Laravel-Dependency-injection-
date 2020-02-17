<?php


namespace App\Billing;


use App\Contract\Payment;
use App\Models\PaypalPaymentGate;
use Illuminate\Support\Str;

class PaypalPayment extends BasePayment
{
    private $currency;
    private $discount;

    public function __construct($currency, $discount = 0.1)
    {
        $this->currency = $currency;
        $this->discount = $discount ?? 0.05;
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }

    public function pay()
    {

    }

    public function charge($amount = null, $coupon_number = null)
    {
        $amount = request('amount');
        $currency = request('currency');
        $confirmation_number = request('confirmation_number');

        $inserted_data = [
            'Payment Type'        => 'PayPal',
            'Amount'              => $amount,
            'Discount'            => $this->discount,
            'Currency'            => $currency,
            'Confirmation Number' => $confirmation_number,
            'Total Charge'        => $amount - $this->discount * $amount
        ];

        $payment_gate = PaypalPaymentGate::create(
            [
                'amount'              => $amount,
                'discount'            => $this->discount,
                'currency'            => $currency,
                'confirmation_number' => $confirmation_number
            ]
        );

        $payment_gate->users()->save(auth()->user());

        return $inserted_data;
    }
}
