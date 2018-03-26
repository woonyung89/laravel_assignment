<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable=[
		'student_id',
		'nric',
		'name',
    'address',
    'faculty',
    'phone',
    'gender',

	];


  public function clubs(){
    return $this -> belongsToMany(Club::class);
  }
}
