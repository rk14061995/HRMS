<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHospitalAddToMedicalClaimReques extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medical_claim_reques', function (Blueprint $table) {
            //
            $table->string('hospital_add')->nullable();
            $table->string('hospital_bank')->nullable();
            $table->string('hospital_branch')->nullable();
            $table->string('hospital_acc_no')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medical_claim_reques', function (Blueprint $table) {
            //
        });
    }
}
