<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Maiksimov\Discount\Discount;
use Maiksimov\Discount\DiscountRelation;

class CreateDiscountRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create((new DiscountRelation)->getTable(), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('discount_id')->unsigned();
            $table->string('model');
            $table->integer('model_id')->unsigned();


        });

        Schema::table((new DiscountRelation())->getTable(), function(Blueprint $table)
        {
            $table->foreign('discount_id')
                ->references('id')
                ->on((new Discount)->getTable())
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists((new DiscountRelation)->getTable());
    }
}
