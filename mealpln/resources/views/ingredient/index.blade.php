<!-- ingredient / index.blade.php -->

@extends('layout.page')

@section('title')
  Ingredients 
@endsection

@section('description')
  List of all your ingredients for making tasty recipes
@endsection

@section('content')

  <h1>
    <span>Ingredients</span>
    <a href="{{ route('ingredients.create')}}" class="btn btn-primary float-right">Add Ingredient</a>
  </h1>

  <table class="table table-striped mt-4">
    <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
        </tr>
    </thead>

    <tbody>
        @foreach($ingredients as $ingredient)
        <tr>
            <td><a href="{{ route('ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a></td>
            <td>{{ $ingredient->description }}</td>
            <td>£{{ $ingredient->priceperunit }}</td>
        </tr>
        @endforeach
    </tbody>
    
  </table>

@endsection