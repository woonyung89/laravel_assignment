<?php

use App\Common;

?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate...-->

<div class="panel-body">
  <!--New Division Form-->
  {!! Form::model($club,[
    'route' => ['club.store'],
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
    <!-- clubship_no -->
    <div class="form-group row">
      {!!Form::label('club-code','Club Code',[
      'class'=>'control-label col-sm-3',])!!}
      <div class="col-sm-9">
        {!!Form::text('code', null,[
        'id'=>'club-code',
        'class'=>'form-control',
        'maxlength'=>10,
        ])!!}
      </div>
    </div>
    <!--Name-->
    <div class="form-group row">
      {!!Form::label('club-name','Name',[
      'class'=>'control-label col-sm-3',
      ])!!}
      <div class="col-sm-9">
        {!!Form::text('name',null,[
        'id'=>'club-name',
        'class' =>'form-control',
        'maxlength'=>100,
        ])!!}
      </div>
    </div>

    <!--phone-->
    <div class="form-group row">
      {!!Form::label('club-desc','Description',[
      'class'=>'control-label col-sm-3',
      ])!!}
      <div class="col-sm-9">
        {!!Form::text('desc',null,[
        'id'=>'club-desc',
        'class'=>'form-control',
        'maxlength'=>11,
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
