<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferenceEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conference_employee', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conference_id');
            $table->unsignedBigInteger('employee_id');

            $table->foreign('conference_id')->references('id')->on('conferences');
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conference_employee');
    }
}
