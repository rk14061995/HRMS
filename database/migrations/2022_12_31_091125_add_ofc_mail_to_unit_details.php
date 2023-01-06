<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOfcMailToUnitDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('unit_details', function (Blueprint $table) {
            //
            $table->string('unit_office_name')->nullable();
            $table->string('ofc_email')->nullable();
            $table->string('ofc_telephone')->nullable();
            $table->string('ofc_alternate_no')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unit_details', function (Blueprint $table) {
            //
        });
    }
}
