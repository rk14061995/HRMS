<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LTCClaimRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ltc_claim_reques',function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('emp_id');
            $table->string('applied_by')->comment('Applied By User');
            $table->string('claim_amount')->nullable();
            // $table->enum('claim_type',["In","Out"]);
            $table->string('claim_status')->default(2)->comment('0:rejected, 1:approved, 2:pending');
            $table->string('doc_path')->nullable();
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
