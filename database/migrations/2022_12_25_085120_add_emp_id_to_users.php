<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmpIdToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('emp_id')->default(0);
            $table->string('dob')->nullable()->comment('Date of Birth');
            $table->string('do_joining')->nullable()->comment('Date of Joining');
            $table->enum('gender',['M','F','NA'])->nullable();
            $table->string('primary_mob')->nullable();
            $table->string('grade')->nullable();
            $table->string('gpf_no')->nullable();
            $table->string('pay')->nullable();
            $table->string('alternat_mob')->nullable();
            $table->text('temp_address')->nullable()->comment('Temporary Address');
            $table->text('perm_address')->nullable()->comment('Permanent Address');
            $table->string('user_job_type')->nullable()->comment('Permanent or Temporary');
            $table->enum('mrg_status',['Single','Married','Divorce'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
