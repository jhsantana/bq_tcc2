<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStudentSuject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_subject', function (Blueprint $table) {
            $table->integer('student_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->primary(['student_id', 'subject_id']);

            $table->foreign('student_id')->references('id')->on('students')
            ->onUpdate('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student_subject', function (Blueprint $table) {
            //
        });
    }
}
