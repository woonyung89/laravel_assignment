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
  ];


    public function clubs(){
      return $this -> belongsTo(Club::class);
    }
}
