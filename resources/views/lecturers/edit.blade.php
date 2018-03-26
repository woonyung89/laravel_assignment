<?php

use App\Common;
use App\Club;
?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
  <!-- New lecturer Form -->
  {!! Form::model($lecturer, [
    'route' => ['lecturer.update', $lecturer->id],
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

    <!-- Lecture ID -->
    <div class="form-group row">
      {!! Form::label('lecturer-id', 'lecturer ID', [
      'class' => 'control-label col-sm-3',
      ]) !!}
      <div class="col-sm-9">
        {!! Form::text('lecturer_id', $lecturer->lecturer_id, [
        'id' => 'lecturer-id',
        'class' => 'form-control',
        'maxlength' => 10,
        ]) !!}
      </div>
    </div>

    <!-- Name -->
    <div class="form-group row">
      {!! Form::label('lecturer-name', 'Name', [
      'class' => 'control-label col-sm-3',
      ]) !!}
      <div class="col-sm-9">
        {!! Form::text('name', $lecturer->name, [
        'id' => 'lecturer-name',
        'class' => 'form-control',
        'maxlength' => 100,
        ]) !!}
      </div>
    </div>


<!-- Address -->
<div class="form-group row">
  {!! Form::label('lecturer-address', 'Address', [
  'class' => 'control-label col-sm-3',
  ]) !!}
  <div class="col-sm-9">
    {!! Form::textarea('address', $lecturer->address, [
    'id' => 'lecturer-address',
    'class' => 'form-control',
    ]) !!}
  </div>
</div>
<!--phone-->
<div class="form-group row">
  {!! Form::label('lecturer-phone', 'Phone', [
  'class' => 'control-label col-sm-3',
  ]) !!}
  <div class="col-sm-9">
    {!! Form::textarea('phone', $lecturer->phone, [
    'id' => 'lecturer-phone',
    'class' => 'form-control',
    'max-length' => 100,
    ]) !!}
  </div>
</div>
<!--nric-->
<div class="form-group row">
  {!! Form::label('lecturer-nric', 'Nric', [
  'class' => 'control-label col-sm-3',
  ]) !!}
  <div class="col-sm-9">
    {!! Form::textarea('nric', $lecturer->nric, [
    'id' => 'lecturer-nric',
    'class' => 'form-control',
    'max-length' => 100,
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
