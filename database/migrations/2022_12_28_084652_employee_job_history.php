<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeeJobHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('emp_job_history',function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('emp_id')->default(0);
            $table->string('designation')->nullable();
            $table->string('unit_no')->nullable();
            $table->string('unit_name')->nullable();
            $table->string('unit_incharge_id')->nullable()->comment('Employee Id');
            $table->string('unit_job_status')->default(0)->comment('Currently Working in this unit or not');
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
