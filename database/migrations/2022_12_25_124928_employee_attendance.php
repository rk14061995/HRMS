<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeeAttendance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('emp_attendance',function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('emp_id')->default(0);
            $table->string('attendance_date')->nullable();
            $table->string('attendance_time_in')->nullable();
            $table->string('attendance_time_out')->nullable();
            $table->string('absent_present')->nullable();
            $table->string('marked_by')->default(0);
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
