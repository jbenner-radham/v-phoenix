<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @see http://microformats.org/wiki/h-card
     * @see http://tools.ietf.org/html/rfc6350
     * @return void
     */
    public function up()
    {
        Schema::create('vcards', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('adr'); /** @todo Make relation */
            $table->string('email');
            $table->string('family_name');
            $table->string('given_name');
            $table->integer('kind'); /** @todo Make relation */
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
