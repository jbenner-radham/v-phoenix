<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @see http://microformats.org/wiki/h-card
     * @see https://html.spec.whatwg.org/#vcard
     * @see http://tools.ietf.org/html/rfc6350
     * @see http://microformats.org/wiki/h-adr
     * @see http://tools.ietf.org/html/rfc6350#section-6.3.1
     * @return void
     */
    public function up()
    {
        Schema::create('vcards', function (Blueprint $table) {
            $table->increments('id');

            // Entity
            $table->string('email');
            $table->string('family_name');
            $table->string('given_name');
            $table->string('title');

            // Address
            $table->string('country_name');
            $table->string('extended_address');
            $table->string('locality');
            $table->string('org');
            $table->string('postal_code');
            $table->string('region');
            $table->string('street_address');
            $table->string('tel');

            // Meta
            $table->integer('kind_id')->unsigned();
            $table->foreign('kind_id')->references('id')->on('kinds');
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
        Schema::dropIfExists('vcards');
    }
}
