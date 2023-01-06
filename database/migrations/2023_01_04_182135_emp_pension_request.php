<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmpPensionRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('emp_pension_request',function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('emp_id');
            $table->enum('case_type',['REG','DTH'])->default('REG');
            $table->string('req_status')->default(2)->comment('0:rejected, 1:approved, 2:pending');
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
