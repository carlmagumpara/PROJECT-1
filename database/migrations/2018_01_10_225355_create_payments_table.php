<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('case_id');
            $table->integer('case_detail_id');
            $table->enum('option', ['Bank Deposit','Paypal','GCash','SmartMoney'])->nullable();
            $table->string('bank_name');
            $table->date('bank_date_deposited');
            $table->string('bank_branch');
            $table->string('bank_country');
            $table->string('amount');
            $table->string('reference_no');
            $table->string('cellphone_no');
            $table->enum('gcash_type', ['GCash Mobile','GCash Online','GCash Remit'])->nullable();
            $table->enum('smartmoney_type', ['Over-the-Counter','Wallet-to-Wallet','Mobile Banking Service','Smart Padala'])->nullable();
            $table->enum('status', ['Pending','Overdue','Confirmed'])->default('Pending');
            $table->enum('confirmed', [1, 0])->nullable();
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
        Schema::dropIfExists('payments');
    }
}
