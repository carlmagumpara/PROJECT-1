<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalCaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_case_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('legal_case_id');
            $table->enum('legal_service', ['Per Query','Video Conference','Office Conference','Monthly Retainer','Case/Project Retainter'])->nullable();
            $table->text('summary');
            $table->text('objectives');
            $table->text('questions');
            $table->enum('status', ['Pending','For Review','Incomplete','Closed'])->default('Pending');
            $table->enum('is_hidden', [0, 1])->default(0);
            $table->enum('closed', [0, 1])->default(0);
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
        Schema::dropIfExists('legal_case_details');
    }
}
