<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DependantMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('emp_dependant_details', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('emp_id')->nullable();
            $table->string('relation')->nullable();
            $table->string('dep_name')->nullable();
            $table->string('id_no')->nullable();
            $table->string('doc_path')->nullable();
            $table->integer('status')->default(1);
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
