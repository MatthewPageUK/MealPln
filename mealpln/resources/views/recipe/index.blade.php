<!-- ingredient / index.blade.php -->

@extends('layout.page')

@section('title')
    Recipes 
@endsection

@section('description')
  List of all your recipes
@endsection

@section('content')

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif

  <h1>
    <span>Recipes</span>
    <a href="{{ route('recipes.create')}}" class="btn btn-primary float-right">Add Recipe</a>
  </h1>

  <table class="table table-striped">
    <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($recipes as $recipe)
        <tr>
            <td><a href="{{ route('recipes.show', $recipe->id) }}">{{ $recipe->name }}</a></td>
            <td>{{$recipe->description}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <script>
    document.querySelectorAll(".alert").forEach((alert)=>{
      setTimeout(function() { alert.style.display = 'none' }, 2000);
    });
  </script>
@endsection