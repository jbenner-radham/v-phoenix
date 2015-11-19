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
     * @return void
     */
    public function up()
    {
        Schema::create('vcards', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->string('email');
            $table->string('family_name');
            $table->string('given_name');
            $table->foreign('kind_id')->references('id')->on('vcard_kinds');
            $table->timestamps();
            $table->string('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vcards');
    }
}
