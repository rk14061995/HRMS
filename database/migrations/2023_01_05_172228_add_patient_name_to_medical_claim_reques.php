<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPatientNameToMedicalClaimReques extends Migration
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
            $table->string('patient_name')->nullable();
            $table->string('patient_rel')->nullable();
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
