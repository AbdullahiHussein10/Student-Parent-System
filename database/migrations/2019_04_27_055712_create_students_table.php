<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->integer('adm_no');
            $table->string('classes');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->date('enrollment_date');
            $table->string('city');
            $table->string('province');

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
        Schema::dropIfExists('students');
    }
}

