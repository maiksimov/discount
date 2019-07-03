<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Maiksimov\Discount\UserAssignment;

class CreateDiscountRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create((new Discount)->getTable(), function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('amount', 12, 2)->nullable(false)->default('0.00');
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
        Schema::dropIfExists((new Discount)->getTable());
    }
}
