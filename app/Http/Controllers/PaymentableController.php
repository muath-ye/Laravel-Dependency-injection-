<?php

namespace App\Http\Controllers;

use App\Contract\Payment;
use App\Models\Paymentable;
use Illuminate\Http\Request;

class PaymentableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Contract\Payment $payment
     *
     * @return mixed
     */
    public function store(Payment $payment)
    {
        return $payment->charge();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Contract\Payment $payment
     *
     * @return Illuminate\View\View
     */
    public function show(Payment $payment)
    {
        return $payment->charge();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paymentable  $paymentGate
     * @return \Illuminate\Http\Response
     */
    public function edit(Paymentable $paymentGate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paymentable  $paymentGate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paymentable $paymentGate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paymentable  $paymentGate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paymentable $paymentGate)
    {
        //
    }
}
