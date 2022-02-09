<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('CustomerID');
            $table->text('Fname');
            $table->text('Lname');
            $table->text('Address');
            $table->integer('PostalCode');
            $table->integer('Phone');
            $table->integer('Point');
            $table->integer('serviceEmp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_customer');
    }
}
