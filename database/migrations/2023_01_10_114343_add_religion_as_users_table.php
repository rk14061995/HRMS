<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReligionAsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('blood_group')->nullable();
            $table->string('religion')->nullable();
            $table->string('add_cat')->nullable();
            $table->string('pro_macp')->nullable();
            $table->string('tos')->nullable();
            $table->enum('cgh_ehs',['cghs','eihs']);
            $table->string('da_on_tpt')->nullable();
            $table->string('remark')->nullable();
            $table->string('el')->nullable();
            $table->string('cl')->nullable();
            $table->string('commmute_hpl')->nullable();
            $table->string('hpl')->nullable();
            $table->string('otl_comoff')->nullable();
            $table->string('eol_without')->nullable();
            $table->string('ccl')->nullable();
            $table->string('paternity_lev')->nullable();
            $table->string('maternity_lev')->nullable();
            $table->string('eol_with_mc')->nullable();
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
