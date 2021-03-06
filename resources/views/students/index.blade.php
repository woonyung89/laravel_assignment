<?php

use App\Common;

?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">

  @if (count($students) > 0)
  <table class="table table-striped task-table">

    <!-- Table Headings -->
    <thead>
      <tr>
        <th>No.</th>
        <th>Student ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Faculty</th>
        <th>phone</th>
        <th>Created</th>
        <th>Actions</th>
      </tr>
    </thead>

    <!-- Table Body -->
    <tbody>
      @foreach ($students as $i => $student)
      <tr>
        <td class="table-text">
          <div>{{ $i+1 }}</div>
        </td>
        <td class="table-text">
          <div>
            {!! link_to_route(
                          'student.show',
                          $title = $student->student_id,
                          $parameters = [
                          'id' => $student->id,
                          ]
                          ) !!}
          </div>
        </td>
        <td class="table-text">
          <div>{{ $student->name }}</div>
        </td>
        <td class="table-text">
          <div>{{ Common::$gender[$student->gender] }}</div>
        </td>
        <td class="table-text">
          <div>{{ $student->address}}</div>
        </td>

        <td class="table-text">
          <div>{{ Common::$faculty[$student->faculty] }}</div>
        </td>
        <td class="table-text">
          <div>{{ $student->phone }}</div>
        </td>

        <td class="table-text">
          <div>{{ $student->created_at }}</div>
        </td>
        <td class="table-text">
          <div>
            {!! link_to_route(
                          'student.join',
                          $title = 'Join',
                          $parameters = [
                          'id' => $student->id,
                          ]
                          ) !!}
            {!! link_to_route(
                          'student.edit',
                          $title = 'Edit',
                          $parameters = [
                          'id' => $student->id,
                          ]
                          ) !!}
          </div>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <div>
      No records found
    </div>
    @endif
  </div>
  {{-- {{$students->links()}} --}}
  @endsection
