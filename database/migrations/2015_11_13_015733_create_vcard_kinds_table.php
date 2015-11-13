<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVcardKindsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @see http://tools.ietf.org/html/rfc6350#section-6.1.4
     * @return void
     */
    public function up()
    {
        Schema::create('vcard_kinds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vcard_kinds');
    }
}
