<?php

use App\Common;
use App\Division;

?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate...-->

<div class="panel-body">
  <!--New Division Form-->
  {!! Form::model($student,[
    'route' => ['student.store'],
    'class'=>'form-horizontal'
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
    <!-- studentship_no -->
    <div class="form-group row">
      {!!Form::label('student-id','student ID',[
      'class'=>'control-label col-sm-3',])!!}
      <div class="col-sm-9">
        {!!Form::text('student_id', null,[
        'id'=>'student-id',
        'class'=>'form-control',
        'maxlength'=>10,
        ])!!}
      </div>
    </div>
    <!--NRIC-->
    <div class="form-group row">
      {!!Form::label('student-ic','NRIC',[
      'class'=>'control-label col-sm-3',])!!}
      <div class="col-sm-9">
        {!!Form::text('nric', null,[
        'id'=>'student-ic',
        'class'=>'form-control',
        'maxlength'=>12,
        ])!!}
      </div>
    </div>
    <!--Name-->
    <div class="form-group row">
      {!!Form::label('student-name','Name',[
      'class'=>'control-label col-sm-3',
      ])!!}
      <div class="col-sm-9">
        {!!Form::text('name',null,[
        'id'=>'student-name',
        'class' =>'form-control',
        'maxlength'=>100,
        ])!!}
      </div>
    </div>
    <!--Gender-->
    <div class="form-group row">
      {!!Form::label('student-gender','Gender',[
      'class'=>'control-label col-sm-3',
      ])!!}
      <div class="col-sm-9">
        @foreach(Common::$gender as $key => $val)
        {!!Form::radio('gender',$key)!!}{{$val}}
        @endforeach
      </div>
    </div>
    <div class="form-group row">
      {!!Form::label('student-faculty','Faculty',[
      'class'=>'control-label col-sm-3',
      ])!!}
      <div class="col-sm-9">
        {!!Form::select('faculty',Common::$faculty,null,[
        'class'=>'form-control',
        'placeholder'=>'- Select Faculty -',
        ])!!}
      </div>
    </div>


    <!--phone-->
    <div class="form-group row">
      {!!Form::label('student-phone','Phone',[
      'class'=>'control-label col-sm-3',
      ])!!}
      <div class="col-sm-9">
        {!!Form::text('phone',null,[
        'id'=>'student-phone',
        'class'=>'form-control',
        'maxlength'=>11,
        ])!!}
      </div>
    </div>

    <!--Address-->
    <div class="form-group row">
      {!!Form::label('student-address','Address',[
      'class'=>'control-label col-sm-3',
      ])!!}
      <div class="col-sm-9">
        {!!Form::textarea('address',null,[
        'id'=>'student-address',
        'class'=>'form-control',
        ])!!}
      </div>
    </div>




    <!--Submit Button-->
    <div class="form-group row">
      <div class="col-sm-offset-3 col-sm-6">
        {!!Form::button('Save',[
        'type'=>'submit',
        'class'=>'btn btn-primary',
        ])!!}
      </div>
    </div>
    {!!Form::close()!!}
  </div>

  @endsection
