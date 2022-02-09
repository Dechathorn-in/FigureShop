<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id('ReceiptID');
            $table->integer('ProductID');
            $table->text('ProductName');
            $table->integer('CustomerID');
            $table->text('CustomerName');
            $table->integer('TotalAmt');
            $table->integer('TotalPrice');
            $table->integer('CurrentOrderPoint');
            $table->date('ReceiptDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_payment');
    }
}
