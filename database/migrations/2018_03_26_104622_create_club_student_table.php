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
          $table->unsignedInteger('club_id');
          $table->foreign('student_id')->references('id')->on('students');
          $table->foreign('club_id')->references('id')->on('clubs');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('club_student', function (Blueprint $table) {
            //
        });
    }
}
