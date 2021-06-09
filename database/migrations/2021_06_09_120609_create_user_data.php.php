<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $chema::create('UserData', function(Blueprint $table) {
            $table->increments('uid');
            $table->string('loginid');
            $table->string('loginpw');
            $table->string('name');
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $chema::dropIfExists('UserData');
    }
}
