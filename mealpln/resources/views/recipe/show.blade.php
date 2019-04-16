<!-- ingredient / show.blade.php -->

@extends('layout.page')

@section('title')
  {{ $ingredient->name }} ~ Ingredient
@endsection

@section('description')
  {{ $ingredient->description }}
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h3>{{ $ingredient->name }}</h3>
  </div>
  <div class="card-body">
    <p>{{ $ingredient->description }}</p>
    <p>£{{ $ingredient->priceperunit }}</p>
    <p class="mt-4">
      <form class="delete" action="{{ route('ingredients.destroy', $ingredient->id)}}" method="post">
        @csrf
        @method('DELETE')
        <a href="{{ route('ingredients.index')}}" class="btn btn-secondary">Back</a>
        <a href="{{ route('ingredients.edit',$ingredient->id)}}" class="btn btn-primary">Edit</a>
        <button class="btn btn-primary" type="submit">Delete</button>
      </form>
    </p>
  </div>
</div>
<script>
    document.querySelectorAll(".delete").forEach((frm)=>{
      frm.addEventListener('submit', function() {
        if (!confirm("Delete this ingredient?")) event.preventDefault();
      });
    });
</script>
@endsection