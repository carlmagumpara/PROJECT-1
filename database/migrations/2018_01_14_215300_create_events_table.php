<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('case_id');
            $table->integer('case_detail_id');
            $table->string('title');
            $table->tinyInteger('allday');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->tinyInteger('editable');
            $table->integer('is_locked');
            $table->integer('calendar_id');
            $table->string('conference');
            $table->string('color');
            $table->string('messenger_type');
            $table->string('messenger_username');
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
        Schema::dropIfExists('events');
    }
}
