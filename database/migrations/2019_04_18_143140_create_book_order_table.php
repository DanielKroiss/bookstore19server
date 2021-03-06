<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_order', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('book_id')->unsigned()->index();
            $table->foreign('book_id')->references('id')
                ->on('books')->onDelete('cascade');

            $table->integer('order_id')->unsigned()->index();
            $table->foreign('order_id')->references('id')
                ->on('orders')->onDelete('cascade');

          //  $table->primary(['book_id','order_id']);


            $table->integer('bookAmount')->default(1);
            $table->decimal('curBookPrice')->default(0);

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
        Schema::dropIfExists('book_order');
    }
}
