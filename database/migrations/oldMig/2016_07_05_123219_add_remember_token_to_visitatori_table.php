<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRememberTokenToVisitatoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visitors', function(Blueprint $table)
        {
            $table->rememberToken();
        });
    }

    public function down()
    {
        Schema::table('visitors', function(Blueprint $table)
        {
            $table->dropColumn('remember_token');
        });
    }
}
