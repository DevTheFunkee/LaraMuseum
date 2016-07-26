<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('tickets', function (Blueprint $table)
        {
          
            $table->increments('id');
            $table->unsignedInteger('visitor_id');
            $table->unsignedInteger('event_id');
            $table->integer ('FASCIA_ORARIA');
            $table->dateTime ('DATA');
            $table->string ('TIPO_PAGAMENTO');
            $table->integer ('QUANTITA');
            $table->timestamps ();

            $table->foreign('visitor_id')->references('id')->on('visitors');
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tickets');
    }
}
