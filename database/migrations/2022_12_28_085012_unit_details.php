<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UnitDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('unit_details',function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('unit_no')->nullable();
            $table->string('unit_name')->nullable();
            $table->string('unit_address')->nullable();
            $table->string('unit_city')->nullable();
            $table->string('unit_pincode')->nullable();
            $table->string('unit_incharge_id')->nullable()->comment('Employee Id');
            $table->string('unit_incharge_Designation')->nullable()->comment('Designation At that Time');
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
