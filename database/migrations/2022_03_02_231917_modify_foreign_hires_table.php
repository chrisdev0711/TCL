<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyForeignHiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 //       Schema::table('hires', function (Blueprint $table) {
 //           $table->dropForeign('hires_contact_id_foreign');
 //           $table->foreign('contact_id')->references('id')->on('contacts');
 //       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
