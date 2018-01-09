<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockholdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockholders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('corporate_partnership_info_id');
            $table->string('name');
            $table->string('nationality');
            $table->integer('no_of_share');
            $table->string('subscribed_capital');
            $table->string('paid_up_capital');
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
        Schema::dropIfExists('stockholders');
    }
}
