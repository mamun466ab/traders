<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCstBotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cst_bot', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('bot_id');
            $table->float('dsl_mnt');
            $table->float('dsl_prc', 10, 2);
            $table->float('mntcrg');
            $table->float('pts');
            $table->string('cstdtl')->nullable();
            $table->timestamps();
            $table->foreign('bot_id')->references('id')->on('bot')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cst_bot');
    }
}
