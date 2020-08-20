<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->string('postcode');
            $table->string('state');
            $table->string('avatar');
            $table->date('dob');
            $table->string('religion')->nullable();
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('manager');
            $table->timestamps();

            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('manager')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
