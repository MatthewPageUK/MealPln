<!-- ingredient / create.blade.php -->

@extends('layout.page')

@section('title')
  Create a new recipe
@endsection

@section('description')
  Create a new recipe to use in your meals
@endsection

@section('content')

  <div class="card">
    <div class="card-header">
      <h3>Create a new recipe</h3>
    </div>
    <div class="card-body">

      <form method="post" action="{{ route('recipes.store') }}">

        <div class="form-group">
          @csrf
          <label for="name">Name</label>
          <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}"/>
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" id="description" class="form-control" name="description" value="{{ old('description') }}"/>
        </div>

        <div>
          <a href="{{ route('recipes.index') }}" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-primary">Create Recipe</button>
        </div>
        
      </form>

    </div>
  </div>

@endsection