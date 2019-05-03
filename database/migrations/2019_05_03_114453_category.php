<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('productid');
            $table->string('productname');
            $table->integer('productprice');
            $table->string('productdescription');
            $table->timestamps();
            $table->unsignedBigInteger('categoryid')->nullable(false);
            $table->foreign('categoryid')
            ->references('categoryid')
            ->on('category');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
