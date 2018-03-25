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

	];


  public function clubs(){
    return $this -> belongsTo(Club::class);
  }
}
