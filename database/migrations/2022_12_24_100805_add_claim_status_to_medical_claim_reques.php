<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClaimStatusToMedicalClaimReques extends Migration
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
            $table->integer('claim_status')->default(2)->comment('0:Rejected, 1:Approved, 2:Pending');
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
