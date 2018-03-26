<?php

use App\Common;

?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
  {!! Form::model($student, [
    'route' => ['student.updateJoin', $student->id],
    'method'=>'post',
    'class' => 'form-horizontal'
    ])!!}
  <table class="table table-striped task-table">
    <!-- Table Headings -->
    <thead>
      <tr>
        <th>Attribute</th>
        <th>Value</th>
      </tr>
    </thead>
    <!-- Table Body -->
    <tbody>

      <tr>
        <td>Student ID</td>
        <td>{{ $student->student_id }}</td>
      </tr>
      <tr>
        <td>Name</td>
        <td>{{ $student->name }}</td>
      </tr>
      <tr>
        <td>Address</td>
        <td>{!! nl2br($student->address) !!}</td>
      </tr>
      <tr>
        <td>Created</td>
        <td>{{ $student->created_at }}</td>
      </tr>
      <tr>
        <td>Faculty</td>
        <td>
          {{ Common::$faculty[$student->faculty] }}
        </td>
      </tr>

      <tr>
        <td>Club</td>
        <td>
          @foreach($club as $g => $val)
              {!!Form::checkbox('club_code[]', $val['id'], (in_array($val['id'], $student->clubs->pluck('id')->toArray())) ? 1 : 0)!!} {{$val['name']}}<br>
              @endforeach
        </td>
      </tr>
    </tbody>
  </table>
  <div class="form-group row">
    <div class="col-sm-offset-3 col-sm-6">
      {!! Form::button('Update', [
      'type' => 'submit',
      'class' => 'btn btn-primary',
      ]) !!}
    </div>
  </div>
</div>

@endsection
