<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditPaymentGatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_payment_gates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('amount')->nullable()->comment('may use amount in payment_gate_table');
            $table->string('discount')->nullable()->comment('may use discount in payment_discount_table');
            $table->string('currency')->nullable();
            $table->string('card_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_payment_gates');
    }
}
