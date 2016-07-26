<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('events', function (Blueprint $table)
        {
            $table->increments ('id');
            $table->string ('TITOLO');
            $table->date ('DATA_INIZIO');
            $table->date ('DATA_FINE');
            $table->float ('PREZZO');
            $table->unsignedInteger('avenue_id');
            $table->timestamps ();

            $table->foreign('avenue_id')->references('id')->on('avenues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
    

}
