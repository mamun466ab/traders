<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFxdAstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fxd_ast', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('astid');
            $table->float('astprc', 10, 2);
            $table->string('astdtl')->nullable();
            $table->timestamps();
            $table->foreign('astid')->references('id')->on('fxd_ast_nm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fxd_ast');
    }
}
