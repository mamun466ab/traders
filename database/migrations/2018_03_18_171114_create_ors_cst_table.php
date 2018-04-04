<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrsCstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ors_cst', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cstnmid')->comment = "Others cost name id from ors_cst_nm table";
            $table->float('cst_mnt', 10, 2)->comment = "Cost total amount";
            $table->string('cst_dtl', 255)->nullable()->comment = "Cost detail";
            $table->timestamps();
            $table->foreign('cstnmid')->references('id')->on('ors_cst_nm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ors_cst');
    }
}
