<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes_teacher', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('classes_id');
            $table->unsignedBigInteger('teachers_id');
            $table->timestamps();
        });
        Schema::table('classes_teacher', function($table){
            $table->foreign('classes_id')->references('classes_id')->on('classes');
            $table->foreign('teachers_id')->references('teachers_id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes_teacher');
    }
}
