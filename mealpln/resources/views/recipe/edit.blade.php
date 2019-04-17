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
  <div class="card-header">
    <h3>Edit Recipe</h3>
  </div>
  <div class="card-body">

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
</div>

<div class="card mt-3">
  <div class="card-header">
    <h4>Ingredients</h4>
  </div>
  <div class="card-body">

    <ul class="list-group list-group-flush">
      @foreach($recipe->ingredients as $ingredient)
        <li class="list-group-item">
          <a href="{{ route('ingredients.show', $ingredient->id) }}">{{ $ingredient->getQuantityInRecipeHuman() }} x {{ $ingredient->name }}</a>
          <span class="float-right">
            <form class="delete" action="{{ route('recipes.deleteingredient', $recipe->id)}}" method="post">
              @csrf
              <input type="hidden" name="ingredient" value="{{ $ingredient->id }}">
              <button class="btn btn-primary" type="submit">Delete</button>
            </form>
          </span>
        </li>
      @endforeach
    </ul>
  </div>
</div>

@include('recipe.addingredient')
@endsection