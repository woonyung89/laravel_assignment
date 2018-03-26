<?php

use App\Common;
use App\Club;

?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
  <!-- New Student Form -->
  {!! Form::model($student, [
    'route' => ['student.update', $student->id],
    'method'=>'put',
    'class' => 'form-horizontal'
    ])!!}
    @if($errors -> any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors -> all() as $error)
        <li>
          {{$error}}
        </li>
        @endforeach
      </ul>
    </div>
    @endif

    <!-- Code -->
    <div class="form-group row">
      {!! Form::label('student-id', 'Student ID', [
      'class' => 'control-label col-sm-3',
      ]) !!}
      <div class="col-sm-9">
        {!! Form::text('student_id', $student->student_id, [
        'id' => 'student-id',
        'class' => 'form-control',
        'maxlength' => 10,
        ]) !!}
      </div>
    </div>

    <!-- Name -->
    <div class="form-group row">
      {!! Form::label('student-name', 'Name', [
      'class' => 'control-label col-sm-3',
      ]) !!}
      <div class="col-sm-9">
        {!! Form::text('name', $student->name, [
        'id' => 'student-name',
        'class' => 'form-control',
        'maxlength' => 100,
        ]) !!}
      </div>
    </div>


<!-- Address -->
<div class="form-group row">
  {!! Form::label('student-address', 'Address', [
  'class' => 'control-label col-sm-3',
  ]) !!}
  <div class="col-sm-9">
    {!! Form::textarea('address', $student->address, [
    'id' => 'student-address',
    'class' => 'form-control',
    ]) !!}
  </div>
</div>
<!--phone-->
<div class="form-group row">
  {!! Form::label('student-phone', 'Phone', [
  'class' => 'control-label col-sm-3',
  ]) !!}
  <div class="col-sm-9">
    {!! Form::textarea('phone', $student->phone, [
    'id' => 'student-phone',
    'class' => 'form-control',
    'max-length' => 100,
    ]) !!}
  </div>
</div>
<!--nric-->
<div class="form-group row">
  {!! Form::label('student-nric', 'Nric', [
  'class' => 'control-label col-sm-3',
  ]) !!}
  <div class="col-sm-9">
    {!! Form::textarea('nric', $student->nric, [
    'id' => 'student-nric',
    'class' => 'form-control',
    'max-length' => 100,
    ]) !!}
  </div>
</div>

<!-- Faculty -->
<div class="form-group row">
  {!! Form::label('student-faculty', 'Faculty', [
  'class' => 'control-label col-sm-3',
  ]) !!}
  <div class="col-sm-9">
    {!! Form::select('faculty', Common::$faculty, $student->faculty, [
    'class' => 'form-control',
    'placeholder' => '- Select Faculty -',
    ]) !!}
  </div>
</div>

<!-- Submit Button -->
<div class="form-group row">
  <div class="col-sm-offset-3 col-sm-6">
    {!! Form::button('Update', [
    'type' => 'submit',
    'class' => 'btn btn-primary',
    ]) !!}
  </div>
</div>


{!! Form::close() !!}
</div>

@endsection
