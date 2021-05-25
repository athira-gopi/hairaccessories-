<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_models', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('contactno');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('postal');
            $table->string('country');
            $table->date('pdate');
            $table->integer('tamt');
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
        Schema::dropIfExists('payment_models');
    }
}
