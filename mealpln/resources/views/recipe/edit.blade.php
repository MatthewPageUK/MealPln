<!-- recipe / edit.blade.php -->

@extends('layout.page')

@section('title')
    Edit recipe ~ {{ $recipe->name }} 
@endsection

@section('description')
  Edit this recipe details
@endsection

@section('content')
<div class="card">
  <div class="card-header"><h3>Edit Recipe</h3></div>
  <div class="card-body">

  @include('layout.cruderrors')

  <form method="post" action="{{ route('recipes.update', $recipe->id) }}">
    <div class="form-group">
      @csrf
      @method('PATCH')
      <label for="name">Name : </label>
      <input type="text" id="name" class="form-control" name="name" value="{{$recipe->name}}"/>
    </div>
    <div class="form-group">
      <label for="description">Description :</label>
      <input type="text" id="description" class="form-control" name="description" value="{{$recipe->description}}"/>
    </div>
    <a href="{{ route('recipes.index')}}" class="btn btn-secondary">Back</a>
    <button type="submit" class="btn btn-primary">Save Recipe</button>
  </form>
</div>
@include('recipe.addingredient')
@endsection