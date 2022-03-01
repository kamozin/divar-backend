<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents_items', function (Blueprint $table) {
            $table->id();
            $table->integer('doc_id');
            $table->integer('product_id');
            $table->integer('package_id');
            $table->integer('count_package');
            $table->string('weight_netto');
            $table->string('weight_brutto');
            $table->string('price');
            $table->string('price_total');
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
        Schema::dropIfExists('documents_items');
    }
}
