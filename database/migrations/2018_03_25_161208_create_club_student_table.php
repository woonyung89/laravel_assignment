<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_student', function (Blueprint $table) {
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('code');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('code')->references('id')->on('clubs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('club_student');
    }
}
