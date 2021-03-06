<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpouseInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spouse_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('email');
            $table->enum('gender', ['Male','Female'])->nullable();
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('address_ph');
            $table->string('address_abroad');
            $table->string('telephone_no');
            $table->string('cellphone_no');
            $table->integer('age');
            $table->string('citizenship');
            $table->enum('education_attained', ['Grade School','High School','Vocational/Short Course','Bachelors/College Degree','Post Graduate Diploma/Masters Degree','Professional License','Docotrate Degree'])->nullable();
            $table->string('school');
            $table->string('company_work');
            $table->string('nature_of_business');
            $table->string('company_address');
            $table->string('work_position');
            $table->string('work_duration');
            $table->enum('work_status', ['Regular','Probationary','Casual','Project','Other'])->nullable();
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
        Schema::dropIfExists('spouse_infos');
    }
}
