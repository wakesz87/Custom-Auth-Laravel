<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('username') ->unique();
            $table->string('email') -> unique();
            $table->string('password');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('birthdate');
            $table->string('birthplace');
            $table->string('city');
            $table->string('postalcode');
            $table->string('adress');


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
        Schema::dropIfExists('users');
    }
}
