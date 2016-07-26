<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('COGNOME');
            $table->string ('NOME');
            $table->string ('TELEFONO');
            $table->string ('LOGIN');
            $table->string ('EMAIL')->unique ();
            $table->string ('password');
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
        Schema::drop('visitors');
    }
}
