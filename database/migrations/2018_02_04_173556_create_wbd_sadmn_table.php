<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWbdSadmnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wbd_sadmn', function (Blueprint $table) {
            $table->increments('wbdid');
            $table->string('wbdumn',50);
            $table->string('wbdeml',100);
            $table->string('wbdpsd',32);
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
        Schema::dropIfExists('wbd_sadmn');
    }
}
