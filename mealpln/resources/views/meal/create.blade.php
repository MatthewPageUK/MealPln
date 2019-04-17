<!-- meal / create.blade.php -->

@extends('layout.page')

@section('title')
  Create a new meal
@endsection

@section('description')
  Create a new meal to use in your plan
@endsection

@section('content')

  <div class="card">

    <div class="card-header">
      <h3>Create a new meal</h3>
    </div>
  
    <div class="card-body">

      <form method="post" action="{{ route('meals.store') }}">

        <div class="form-group">
          @csrf
          <label for="name">Name</label>
          <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}"/>
        </div>

        <div class="form-group">
          <label for="description">Sort order</label>
          <input type="text" id="description" class="form-control" name="sortorder" value="{{ old('sortorder') }}"/>
        </div>

        <div>
          <a href="{{ route('meals.index') }}" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-primary">Create Meal</button>
        </div>

      </form>
    </div>
  </div>

@endsection