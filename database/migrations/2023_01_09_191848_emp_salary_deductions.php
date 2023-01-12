<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmpSalaryDeductions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('emp_salary_deduction',function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('emp_id')->default(0);
            $table->string('cghs')->default(0);
            $table->string('cgeis')->default(0);
            $table->string('rent_rec')->default(0);
            $table->string('gpf_ref')->default(0);
            $table->string('f_adv')->default(0);
            $table->string('misc')->default(0);
            $table->string('tax_deduction')->default(0);
            $table->string('nps_deduction')->default(0);
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
