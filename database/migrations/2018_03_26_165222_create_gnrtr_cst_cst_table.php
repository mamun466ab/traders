<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGnrtrCstCstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gnrtr_cst', function (Blueprint $table) {
            $table->increments('id');
            $table->float('dsl_mnt', 10, 2);
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
        Schema::dropIfExists('gnrtr_cst');
    }
}
