<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUldMcnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uld_mcn', function (Blueprint $table) {
            $table->increments('id');
            $table->float('dsl', 10, 2);
            $table->float('crg', 10, 2);
            $table->float('pts', 10, 2);
            $table->string('cstdtl', 255)->nullable();
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
        Schema::dropIfExists('uld_mcn');
    }
}
