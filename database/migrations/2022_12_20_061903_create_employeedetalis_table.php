<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeedetalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeedetalis', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->string('designation');
            $table->date('dob');
            $table->string('location');
            $table->text('address');
            $table->string('grade');
            $table->enum('status',["single","married"]);
            $table->string('depandend');
            $table->string('mobile',12);
            $table->string('email',100);
            $table->string('basicpay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employeedetalis');
    }
}
