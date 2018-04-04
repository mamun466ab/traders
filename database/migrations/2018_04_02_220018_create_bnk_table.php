<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBnkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bnk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('inout', 30);
            $table->float('in', 11, 2);
            $table->float('out', 11, 2);
            $table->float('csh', 11, 2);
            $table->string('dtl', 255)->nullable();
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bnk');
    }
}
