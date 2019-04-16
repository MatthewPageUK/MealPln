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
    @include('layout.cruderrors')
    <p>{{ $recipe->description }}</p>
    
    <ul class="list-group list-group-flush">
    @foreach($recipe->ingredients as $ingredient)
      <li class="list-group-item">
        <a href="{{ route('ingredients.show', $ingredient->id) }}">{{ $ingredient->pivot->quantity }} x {{ $ingredient->name }}</a>
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
    <h3>Total price £ {{ $recipe->getPrice() }}</h3>
    <p class="mt-4">
      <form class="delete" action="{{ route('recipes.destroy', $recipe->id)}}" method="post">
        @csrf
        @method('DELETE')
        <a href="{{ route('recipes.index')}}" class="btn btn-secondary">Back</a>
        <a href="{{ route('recipes.edit',$recipe->id)}}" class="btn btn-primary">Edit</a>
        <button class="btn btn-primary" type="submit">Delete</button>
      </form>
    </p>
  </div>
</div>
@include('recipe.addingredient')
<script>
    document.querySelectorAll(".delete").forEach((frm)=>{
      frm.addEventListener('submit', function() {
        if (!confirm("Delete this recipe?")) event.preventDefault();
      });
    });
</script>
@endsection