<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_subjects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            
            $table->unsignedBigInteger('subjects_id')->unsigned();
            
            $table->timestamps();
        });
        Schema::table('students_subjects', function($table){
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->foreign('subjects_id')->references('subject_id')->on('subjects');
        });

 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_subjects');
    }
}
