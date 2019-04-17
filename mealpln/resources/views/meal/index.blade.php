<!-- meal / index.blade.php -->

@extends('layout.page')

@section('title')
  Meal Templates 
@endsection

@section('description')
  List of all your meal templates
@endsection

@section('content')

  <h1>
    <span>Meal Templates</span>
    <a href="{{ route('meals.create')}}" class="btn btn-primary float-right">Add Meal</a>
  </h1>

  <table class="table table-striped mt-4">
    <thead>
        <tr>
          <th>Name</th>
        </tr>
    </thead>

    <tbody>
        @foreach($meals as $meal)
        <tr>
            <td><a href="{{ route('meals.show', $meal->id) }}">{{ $meal->name }}</a></td>
        </tr>
        @endforeach
    </tbody>

  </table>

@endsection