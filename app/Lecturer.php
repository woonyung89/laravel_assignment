<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    //
    protected $fillable=[
    'lecturer_id',
		'nric',
		'name',
    'address',
    'count',
    'gender',
    'phone',
  ];


    public function clubs(){
      return $this -> belongsToMany(Club::class);
    }
}
