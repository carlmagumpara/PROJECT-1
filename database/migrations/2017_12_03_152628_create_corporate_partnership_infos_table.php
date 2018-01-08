<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporatePartnershipInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_partnership_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('company_name');
            $table->enum('type', ['Stock Corporation','Non-Stock','General Partnership','Limited Partnership'])->nullable();
            $table->string('principal_office_address');
            $table->string('business_address');
            $table->string('line_of_business');
            $table->enum('attach_fill_out', ['Attach','Fill Out'])->default('Attach');
            $table->string('authorized_capital_stock_partnership_capital');
            $table->integer('no_of_shares');
            $table->decimal('par_value', 10, 2);
            $table->integer('no_of_shares_subscribed');
            $table->string('subscribed_capital');
            $table->string('paid_up_capital');
            $table->string('fiscal_calendar_year');
            $table->string('annual_meeting');
            $table->string('president');
            $table->string('treasurer');
            $table->string('secretary');
            $table->string('general_manager');
            $table->text('managing_partners');
            $table->enum('stockholder_type', ['Publicly Listed','Not Publicly Listed'])->nullable();
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
        Schema::dropIfExists('corporate_partnership_infos');
    }
}
