<?php

use App\Common;

?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">

  @if (count($lecturers) > 0)
  <table class="table table-striped task-table">

    <!-- Table Headings -->
    <thead>
      <tr>
        <th>No.</th>
        <th>Lecturer ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>phone</th>
        <th>Created</th>
        <th>Actions</th>
      </tr>
    </thead>

    <!-- Table Body -->
    <tbody>
      @foreach ($lecturers as $i => $lecturer)
      <tr>
        <td class="table-text">
          <div>{{ $i+1 }}</div>
        </td>
        <td class="table-text">
          <div>
            <div>{{ $lecturer->lecturer_id }}</div>
          </div>
        </td>
        <td class="table-text">
          <div>{{ $lecturer->name }}</div>
        </td>
        <td class="table-text">
          <div>{{ Common::$gender[$lecturer->gender] }}</div>
        </td>
        <td class="table-text">
          <div>{{ $lecturer->address}}</div>
        </td>

        <td class="table-text">
          <div>{{ $lecturer->phone }}</div>
        </td>
        <td class="table-text">
          <div>{{ $lecturer->created_at }}</div>
        </td>
        <td class="table-text">
          <div>
            {!! link_to_route(
                          'lecturer.join',
                          $title = 'Join',
                          $parameters = [
                          'id' => $lecturer->id,
                          ]
                          ) !!}
            {!! link_to_route(
                          'lecturer.edit',
                          $title = 'Edit',
                          $parameters = [
                          'id' => $lecturer->id,
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
  {{-- {{$lecturers->links()}} --}}
  @endsection
