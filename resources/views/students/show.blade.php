<?php

use App\Common;

?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
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
          <ol>
          @foreach($student->clubs as $club )
          <li>{{$club->name}}</li>
          @endforeach
        </ol>
        </td>
      </tr>



    </tbody>
  </table>
</div>

@endsection
