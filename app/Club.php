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
    return $this->belongsToMany(Student::class);
  }
  public function lecturers()
  {
    return $this->belongsToMany(Lecturer::class);
  }
}
