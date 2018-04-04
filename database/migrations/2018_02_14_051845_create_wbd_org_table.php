<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWbdOrgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wbd_org', function (Blueprint $table) {
            $table->increments('org_id');
            $table->string('org_nm', 100);
            $table->string('org_cd', 10)->unique();
            $table->string('org_eml', 100)->unique();
            $table->string('org_adrs', 255);
            $table->string('org_exdt', 20);
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
        Schema::dropIfExists('wbd_org');
    }
}
