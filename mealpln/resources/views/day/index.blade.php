<!-- day / index.blade.php -->

@extends('layout.page')

@section('title')
  Day Planner 
@endsection

@section('description')
  Plan your meal days
@endsection

@section('content')

  <h1>Days</h1>

  <table class="table table-striped mt-4">
    <thead>
        <tr>
          <th>Name</th>
        </tr>
    </thead>

    <tbody>
        @foreach($days as $day)
        <tr>
            <td><a href="{{ route('days.show', $day->id) }}">{{ $day->name }}</a></td>
        </tr>
        @endforeach
    </tbody>
    
  </table>

@endsection