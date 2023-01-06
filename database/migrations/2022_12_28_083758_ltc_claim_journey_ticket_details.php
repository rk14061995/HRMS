<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LtcClaimJourneyTicketDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ltc_claim_journey_ticket_detail',function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('emp_id')->default(0);
            $table->string('ltc_claim_journey_id')->default(0);
            //Seat
            $table->string('seat_class')->nullable();
            $table->string('seat_no')->nullable();
            $table->string('seat_status')->nullable()->default('Confirm');
            //Passenger
            $table->string('passenger_name')->nullable();
            $table->string('passender_rel')->nullable();
            $table->string('passender_age')->nullable();

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
