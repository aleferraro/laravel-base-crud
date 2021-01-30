<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
        
            $table->bigIncrements('id');
            $table->string('guest_full_name');
            $table->string('guest_credit_card');
            $table->Integer('room');
            $table->string('from_date');
            $table->string('to_date');
            $table->mediumText('more_details');
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
        Schema::drop('bookings');
    }
}
