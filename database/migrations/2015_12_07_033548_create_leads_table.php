<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('description');
            $table->boolean('include_packing');
            $table->integer('lead_sources_id')->unsigned();
            $table->foreign('lead_sources_id')->references('id')->on('lead_sources');
            $table->integer('lead_statuses_id')->unsigned();
            $table->foreign('lead_statuses_id')->references('id')->on('lead_statuses');
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
        Schema::drop('leads');
    }
}
