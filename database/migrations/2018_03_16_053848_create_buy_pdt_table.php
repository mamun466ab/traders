<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyPdtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_pdt', function (Blueprint $table) {
            $table->increments('id', 25);
            $table->unsignedInteger('pdtid')->comment = "Product id from wbd_pdt table";
            $table->unsignedInteger('mnt')->comment = "Product Amount";
            $table->unsignedInteger('untid')->comment = "Unit id from wbd_unt";
            $table->float('ttlprc', 10, 2)->comment = "Product total price";
            $table->string('dtl', 255)->nullable()->comment = "Product Detail";
            $table->timestamps();
            $table->foreign('pdtid')->references('id')->on('wbd_pdt')->onDelete('cascade');
            $table->foreign('untid')->references('id')->on('wbd_unt')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy_pdt');
    }
}
