<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubLecturerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('club_lecturer', function (Blueprint $table) {
        $table->unsignedInteger('lecturer_id');
        $table->unsignedInteger('club_id');
        $table->foreign('lecturer_id')->references('id')->on('lecturers');
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
        Schema::table('club_lecturer', function (Blueprint $table) {
            //
        });
    }
}
