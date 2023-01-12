<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSsToTransactionDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            //
            $table->enum('initiated_for',['GPF','EOL','PERS_PAY','TPT','SALARY','LTC','CEA','MEDICAL','NPS','HRA','OVER_TIME','TA_DA','GRADE_PAY','TRANSPORT_ALLOWANCE'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            //
        });
    }
}
