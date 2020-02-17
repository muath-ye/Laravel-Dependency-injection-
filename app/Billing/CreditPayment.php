<?php


namespace App\Billing;


use App\Contract\Payment;
use App\Models\CreditPaymentGate;
use Illuminate\Support\Str;

class CreditPayment extends BasePayment
{
    private $currency;
    private $discount;

    public function __construct($currency, $discount = null)
    {
        $this->currency = $currency;
        $this->discount = $discount ?? 0.02;
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
        $card_number = request('card_number');
        $currency = request('currency');
        $amount = request('amount');
        $inserted_data = [
            'Payment Type'        => 'Credit Card',
            'Amount'              => $amount,
            'Discount'            => $this->discount,
            'Currency'            => $currency,
            'Card Number'         => $card_number,
            'Total Charge'        => $amount - $this->discount * $amount
        ];

        $payment_gate = CreditPaymentGate::create(
            [
                'amount'      => $amount,
                'discount'    => $this->discount,
                'currency'    => $currency,
                'card_number' => $card_number
            ]
        );

        $payment_gate->users()->save(auth()->user());

        return $inserted_data;
    }
}
