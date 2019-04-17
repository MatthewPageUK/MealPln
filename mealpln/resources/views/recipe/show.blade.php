<!-- recipe / show.blade.php -->

@extends('layout.page')

@section('title')
  {{ $recipe->name }} ~ recipe
@endsection

@section('description')
  {{ $recipe->description }}
@endsection

@section('content')

  <div class="card">
    <div class="card-header">
      <h3>{{ $recipe->name }}</h3>
    </div>

    <div class="card-body">
      <p>{{ $recipe->description }}</p>
  
      @if($recipe->ingredients->count() > 0)

        @include('ingredient.simplelist', ['ingredients' => $recipe->ingredients])
        <h3 class="mt-4">Price £ {{ $recipe->getPrice() }}</h3>
      
      @else
      
        <p>No ingredients listed, please add some</p>
      
      @endif

    </div>

  </div>

  <p class="mt-4">
    <form class="delete" action="{{ route('recipes.destroy', $recipe->id)}}" method="post">
      @csrf
      @method('DELETE')
      <a href="{{ route('recipes.index')}}" class="btn btn-secondary">Back</a>
      <a href="{{ route('recipes.edit',$recipe->id)}}" class="btn btn-primary">Edit</a>
      <button class="btn btn-primary" type="submit">Delete</button>
    </form>
  </p>

@endsection