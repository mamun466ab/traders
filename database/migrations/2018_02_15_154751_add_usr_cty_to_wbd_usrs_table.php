<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsrCtyToWbdUsrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wbd_usrs', function (Blueprint $table) {
            $table->string('usr_cty', 30)->after('usr_adrs');
            $table->string('usr_dvn', 30)->after('usr_cty');
            $table->string('usr_cnt', 30)->after('usr_dvn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wbd_usrs', function (Blueprint $table) {
            //
        });
    }
}
