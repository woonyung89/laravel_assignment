<?php

use App\Common;

?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
  {!! Form::model($lecturer, [
    'route' => ['lecturer.update', $lecturer->id],
    'method'=>'put',
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
        <td>lecturer ID</td>
        <td>{{ $lecturer->lecturer_id }}</td>
      </tr>
      <tr>
        <td>Name</td>
        <td>{{ $lecturer->name }}</td>
      </tr>
      <tr>
        <td>NRIC</td>
        <td>{{ $lecturer->nric }}</td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>{{ $lecturer->gender }}</td>
      </tr>
      <tr>
        <td>Phone</td>
        <td>{!! nl2br($lecturer->phone) !!}</td>
      </tr>
      <tr>
        <td>Address</td>
        <td>{!! nl2br($lecturer->address) !!}</td>
      </tr>
      <tr>
        <td>Created</td>
        <td>{{ $lecturer->created_at }}</td>
      </tr>
      <tr>
        <td>Club</td>
        <td>
          @foreach($club as $g => $val)
              {!!Form::checkbox('club_code[]', $val['id'], (in_array($val['id'], $lecturer->clubs->pluck('id')->toArray())) ? 1 : 0)!!} {{$val['name']}}<br>
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
