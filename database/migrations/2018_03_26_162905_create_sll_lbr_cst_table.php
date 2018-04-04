<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSllLbrCstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sll_lbr_cst', function (Blueprint $table) {
            $table->increments('id');
            $table->float('dmplbr', 10, 2);
            $table->float('uldlbr', 10, 2);
            $table->float('extlbr', 10, 2);
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
        Schema::dropIfExists('sll_lbr_cst');
    }
}
