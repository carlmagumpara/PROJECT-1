<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->enum('type', ['Personal', 'Corporation']);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('activation_code');
            $table->enum('status', ['Active', 'Not Active', 'Suspended'])->default('Not Active');
            $table->string('referred_by');
            $table->enum('profile_complete', [0, 1])->default(0);
            $table->rememberToken();
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
