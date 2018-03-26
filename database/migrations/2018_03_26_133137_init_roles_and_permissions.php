<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class InitRolesAndPermissions extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    // Define roles
    $admin = Bouncer::role()->create([
      'name' => 'admin',
      'title' => 'Administrator',
    ]);

    $supervisor = Bouncer::role()->create([
      'name' => 'supervisor',
      'title' => 'Supervisor',
    ]);

    $clubLeader = Bouncer::role()->create([
      'name' => 'clubLeader',
      'title' => 'Club Leader',
    ]);

    $member = Bouncer::role()->create([
      'name' => 'member',
      'title' => 'member',
    ]);


    // Define abilities
    $viewStudent = Bouncer::ability()->create([
      'name' => 'view-student',
      'title' => 'View Student',
    ]);

    $createStudent = Bouncer::ability()->create([
      'name' => 'create-student',
      'title' => 'Create Student',
    ]);

    $manageStudent = Bouncer::ability()->create([
      'name' => 'manage-student',
      'title' => 'Manage Student',
    ]);

    $viewClub = Bouncer::ability()->create([
      'name' => 'view-club',
      'title' => 'View Club',
    ]);

    $createClub = Bouncer::ability()->create([
      'name' => 'create-club',
      'title' => 'Create Club',
    ]);

    $joinClub = Bouncer::ability()->create([
      'name' => 'join-club',
      'title' => 'Join Club',
    ]);

    $manageClub = Bouncer::ability()->create([
      'name' => 'manage-club',
      'title' => 'Manage Club',
    ]);

    // Assign abilities to roles
    Bouncer::allow($member)->to($viewStudent);
    Bouncer::allow($member)->to($viewClub);
    Bouncer::allow($member)->to($joinClub);

    Bouncer::allow($supervisor)->to($viewMember);
    Bouncer::allow($supervisor)->to($joinClub);


    Bouncer::allow($manager)->to($viewMember);
    Bouncer::allow($manager)->to($createMember);
    Bouncer::allow($manager)->to($manageMember);
    Bouncer::allow($manager)->to($viewDivision);
    Bouncer::allow($manager)->to($createDivision);
    Bouncer::allow($manager)->to($manageDivision);
    Bouncer::allow($manager)->to($viewGroup);
    Bouncer::allow($manager)->to($createGroup);
    Bouncer::allow($manager)->to($manageGroup);

    Bouncer::allow($admin)->to($viewMember);
    Bouncer::allow($admin)->to($createMember);
    Bouncer::allow($admin)->to($manageMember);
    Bouncer::allow($admin)->to($viewDivision);
    Bouncer::allow($admin)->to($createDivision);

    Bouncer::allow($admin)->to($manageDivision);
    Bouncer::allow($admin)->to($viewGroup);
    Bouncer::allow($admin)->to($createGroup);
    Bouncer::allow($admin)->to($manageGroup);

    // Make the first user an admin
    $user = User::find(1);
    Bouncer::assign('admin')->to($user);
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    //
  }
}
