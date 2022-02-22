<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->integer('inn');
            $table->integer('kpp');
            $table->integer('ogrn');
            $table->text('address');
            $table->string('zip_code');
            $table->text('bank');
            $table->text('bank_details');
            $table->text('bank_address');
            $table->integer('bank_account');
            $table->integer('corr_account');
            $table->text('where_corr_account');
            $table->text('account_us');
            $table->text('account_eu');
            $table->integer('bic');
            $table->text('swift_code');
            $table->integer('contract_id');
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
        Schema::dropIfExists('buyer');
    }
}
