<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrgDvnToWbdOrgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wbd_org', function (Blueprint $table) {
            $table->string('org_psd', 32)->after('org_cd');
            $table->string('org_cty', 30)->after('org_adrs');
            $table->string('org_dvn', 30)->after('org_cty');
            $table->string('org_cnt', 30)->after('org_dvn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wbd_org', function (Blueprint $table) {
            //
        });
    }
}
