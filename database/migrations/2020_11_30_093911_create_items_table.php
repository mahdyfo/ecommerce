<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id('product_id');
            $table->integer('weight');
            $table->unsignedBigInteger('color_id');
            $table->decimal('price', 8, 2, true);
            $table->timestamps();

            // What is cost column for? I think you meant price and maybe cost and price are the same? so I don't make it for now.
            //$table->decimal('cost', 8, 2, true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
