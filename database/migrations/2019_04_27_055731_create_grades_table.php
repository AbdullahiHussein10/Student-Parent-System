<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('grade_id');
            $table->string('subject_code');
            $table->string('subject_name');
            $table->integer('subject_marks');
            $table->string('subject_grade');
            $table->integer('total_marks');
            $table->integer('total_grade');
            $table->integer('term');
            $table->longText('teachers_remarks');
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
        Schema::dropIfExists('grades');
    }
}
