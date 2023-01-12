<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SalaryTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('generated_salary',function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('emp_id')->nullable();
            $table->string('gen_sal_st_id')->nullable();
            $table->string('for_month_year')->nullable();
            $table->string('financial_year')->nullable();
            $table->string('basic_pay')->nullable();
            $table->string('da')->nullable();

            $table->string('hra')->nullable();
            $table->string('tpt')->nullable();
            $table->string('pers_pay')->nullable();
            $table->string('wa')->nullable();
            $table->string('misc')->nullable();
            $table->string('eol_h')->nullable();
            $table->string('eol_d')->nullable();
            //deduction
            $table->string('gpf')->nullable();
            $table->string('gpf_ref')->nullable();
            $table->string('cgeis')->nullable();
            $table->string('cghs')->nullable();
            $table->string('f_adv')->nullable();
            $table->string('rent_rec')->nullable();
            $table->string('misc_ded')->nullable();
            $table->string('tax_ded')->nullable();

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
