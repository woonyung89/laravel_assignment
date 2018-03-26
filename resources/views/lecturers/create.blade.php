<?php

use App\Common;

?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate...-->

<div class="panel-body">
  <!--New Division Form-->
  {!! Form::model($lecturer,[
    'route' => ['lecturer.store'],
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
    <!-- lecturership_no -->
    <div class="form-group row">
      {!!Form::label('lecturer-id','lecturer ID',[
      'class'=>'control-label col-sm-3',])!!}
      <div class="col-sm-9">
        {!!Form::text('lecturer_id', null,[
        'id'=>'lecturer-id',
        'class'=>'form-control',
        'maxlength'=>10,
        ])!!}
      </div>
    </div>
    <!--NRIC-->
    <div class="form-group row">
      {!!Form::label('lecturer-ic','NRIC',[
      'class'=>'control-label col-sm-3',])!!}
      <div class="col-sm-9">
        {!!Form::text('nric', null,[
        'id'=>'lecturer-ic',
        'class'=>'form-control',
        'maxlength'=>12,
        ])!!}
      </div>
    </div>
    <!--Name-->
    <div class="form-group row">
      {!!Form::label('lecturer-name','Name',[
      'class'=>'control-label col-sm-3',
      ])!!}
      <div class="col-sm-9">
        {!!Form::text('name',null,[
        'id'=>'lecturer-name',
        'class' =>'form-control',
        'maxlength'=>100,
        ])!!}
      </div>
    </div>
    <!--Gender-->
    <div class="form-group row">
      {!!Form::label('lecturer-gender','Gender',[
      'class'=>'control-label col-sm-3',
      ])!!}
      <div class="col-sm-9">
        @foreach(Common::$gender as $key => $val)
        {!!Form::radio('gender',$key)!!}{{$val}}
        @endforeach
      </div>
    </div>
    <!--phone-->
    <div class="form-group row">
      {!!Form::label('lecturer-phone','Phone',[
      'class'=>'control-label col-sm-3',
      ])!!}
      <div class="col-sm-9">
        {!!Form::text('phone',null,[
        'id'=>'lecturer-phone',
        'class'=>'form-control',
        'maxlength'=>11,
        ])!!}
      </div>
    </div>

    <!--Address-->
    <div class="form-group row">
      {!!Form::label('lecturer-address','Address',[
      'class'=>'control-label col-sm-3',
      ])!!}
      <div class="col-sm-9">
        {!!Form::textarea('address',null,[
        'id'=>'lecturer-address',
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
