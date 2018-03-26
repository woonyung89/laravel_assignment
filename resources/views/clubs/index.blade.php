<?php

use App\Common;

?>
@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">

  @if (count($clubs) > 0)
  <table class="table table-striped task-table">

    <!-- Table Headings -->
    <thead>
      <tr>
        <th>No.</th>
        <th>Club Code</th>
        <th>Name</th>
        <th>Description</th>
      </tr>
    </thead>

    <!-- Table Body -->
    <tbody>
      @foreach ($clubs as $i => $club)
      <tr>
        <td class="table-text">
          <div>{{ $i+1 }}</div>
        </td>
        <td class="table-text">
          <div>
            <div>{{ $club->code }}</div>
          </div>
        </td>
        <td class="table-text">
          <div>{{ $club->name }}</div>
        </td>

        <td class="table-text">
          <div>{{ $club->desc}}</div>
        </td>
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
  {{-- {{$clubs->links()}} --}}
  @endsection
