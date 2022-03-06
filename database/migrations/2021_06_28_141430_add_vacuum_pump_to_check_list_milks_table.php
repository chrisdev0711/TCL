<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVacuumPumpToCheckListMilksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('check_list_milks', function (Blueprint $table) {
            $table->boolean('vacuum_pump')->default(0)->after('landingLegs_operation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('check_list_milks', function (Blueprint $table) {
            $table->dropColumn('vacuum_pump');
        });
    }
}
