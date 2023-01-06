<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeeSalaryDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('emp_salary_details',function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('emp_id')->default(0);
            $table->string('basic_pay')->nullable();
            $table->string('ta_da')->nullable();
            $table->string('hra')->nullable();
            $table->string('tpt')->nullable();
            $table->string('pers_pay')->nullable();
            $table->string('govt_perks')->nullable();
            $table->string('salary_status')->default(1)->comment('1:Current Salary, 0: Previous Salary');
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
