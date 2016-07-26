<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('avenues', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('NOME');
            $table->string ('INDIRIZZO');
            $table->string ('CITTA');
            $table->string ('PROVINCIA');
            $table->string ('TELEFONO');
            $table->integer ('CAPIENZA');
            $table->timestamps ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('avenues');
    }


}
