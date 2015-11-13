<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdrsTable extends Migration
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
        Schema::create('adrs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('country_name');
            $table->string('extended_address');
            $table->string('locality');
            $table->string('postal_code');
            $table->string('region');
            $table->string('street_address');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('adrs');
    }
}
