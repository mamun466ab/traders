<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWbdUsrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wbd_usrs', function (Blueprint $table) {
            $table->increments('usr_id', 25);
            $table->string('usr_nm', 50);
            $table->string('usr_eml', 100)->unique();
            $table->string('usr_unm', 20)->unique();
            $table->string('usr_psd', 32);
            $table->string('usr_adrs', 255);
            $table->string('usr_ocd', 10);
            $table->string('usr_jdt', 20);
            $table->string('usr_rnk', 50);
            $table->string('usr_pwr', 20);
            $table->tinyInteger('usr_sts');
            $table->timestamps();
            $table->foreign('usr_ocd')->references('org_cd')->on('wbd_org');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wbd_usrs');
    }
}
