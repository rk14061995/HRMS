<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LtcClaimJourneyDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ltc_claim_journey_detail',function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('emp_id')->default(0);
            $table->enum('mode_of_travel',['Bus','Flight','Train'])->nullable();
            //Mode of Transport
            $table->string('date_of_journey')->nullable();
            $table->string('booking_date')->nullable();
            $table->string('departure_time')->nullable();
            $table->string('arrival_time')->nullable();
            $table->string('journey_total_amount')->default(0);
            $table->string('id_ticket_deatils')->default(0);
            $table->string('status')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
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
