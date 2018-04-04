<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGftToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gft_to', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gftid');
            $table->float('mnt', 10, 2);
            $table->string('dtl', 255)->nullable();
            $table->timestamps();
            $table->foreign('gftid')->references('id')->on('gft_to_nm')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gft_to');
    }
}
