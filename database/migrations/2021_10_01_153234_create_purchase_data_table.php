<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->integer('purchased_item_id')->nullable();
            $table->datetime('date')->nullable();
            $table->text('comment')->nullable();
            $table->string('sample')->nullable();
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
        Schema::dropIfExists('purchase_data');
    }
}
