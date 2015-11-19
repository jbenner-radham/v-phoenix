<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @see http://microformats.org/wiki/h-adr
     * @see http://tools.ietf.org/html/rfc6350#section-6.3.1
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_name');
            $table->string('extended_address');
            $table->string('locality');
            $table->string('postal_code');
            $table->string('region');
            $table->string('street_address');
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
        Schema::drop('addresses');
    }
}
