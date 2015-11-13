<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIcalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @see http://microformats.org/wiki/h-event
     * @see http://tools.ietf.org/html/rfc5545
     * @return void
     */
    public function up()
    {
        Schema::create('icalendars', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->dateTime('dtend');
            $table->dateTime('dtstart');
            $table->string('location');
            $table->string('summary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('icalendars');
    }
}
