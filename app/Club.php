<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //
    protected $fillable=[
  'code',
  'name',
  'desc',

];

public function students()
  {
    return $this->hasMany(Student::class);
  }
  public function lecturers()
  {
    return $this->hasMany(Lecturer::class);
  }
}
