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
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('adm_no');
            $table->string('grade');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->date('enrollment_date');
            $table->string('home_address');
            $table->integer('parent_id');
            $table->string('parent_first_name');
            $table->string('parent_last_name');
            $table->string('parent_email');
            $table->biginteger('parent_phone_number');
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

