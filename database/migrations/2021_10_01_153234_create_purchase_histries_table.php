<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseHistriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_histries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->integer('purchased_item_id');
            $table->datetime('visited_on');
            $table->text('comment');
            $table->string('sampl');
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
        Schema::dropIfExists('purchase_histries');
    }
}
