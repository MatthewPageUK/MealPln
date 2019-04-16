<!-- ingredient / create.blade.php -->

@extends('layout.page')

@section('title')
    Create a new ingredient
@endsection

@section('description')
  Create a new ingredient to use in your recipes
@endsection

@section('content')
<div class="card">
  <div class="card-header"><h3>Add Ingredient</h3></div>
  <div class="card-body">

  @include('layout.cruderrors')

  <form method="post" action="{{ route('ingredients.store') }}">
    <div class="form-group">
      @csrf
      <label for="name">Name</label>
      <input type="text" id="name" class="form-control" name="name"/>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" id="description" class="form-control" name="description"/>
    </div>
    <div class="form-group">
      <label for="priceperunit">Price per unit</label>
      £ <input type="text" id="priceperunit" class="form-control" name="priceperunit"/>
    </div>
    <a href="{{ route('ingredients.index') }}" class="btn btn-secondary">Cancel</a>
    <button type="submit" class="btn btn-primary">Create Ingredient</button>
  </form>
</div>
@endsection