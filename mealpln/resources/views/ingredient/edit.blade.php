<!-- ingredient / edit.blade.php -->

@extends('layout.page')

@section('title')
  Edit ingredient ~ {{ $ingredient->name }} 
@endsection

@section('description')
  Edit this ingredient
@endsection

@section('content')

  <div class="card">

    <div class="card-header">
      <h3>Edit Ingredient</h3>
    </div>
 
    <div class="card-body">

      <form method="post" action="{{ route('ingredients.update', $ingredient->id) }}">

        <div class="form-group">
          @csrf
          @method('PATCH')
          <label for="name">Ingredient Name:</label>
          <input type="text" id="name" class="form-control" name="name" value="{{$ingredient->name}}"/>
        </div>
        
        <div class="form-group">
          <label for="description">Description :</label>
          <input type="text" id="description" class="form-control" name="description" value="{{$ingredient->description}}"/>
        </div>
        
        <div class="form-group">
          <label for="priceperunit">Price per unit :</label>
          £ <input type="text" id="priceperunit" class="form-control" name="priceperunit" value="{{$ingredient->priceperunit}}"/>
        </div>
        
        <div>
          <a href="{{ route('ingredients.index')}}" class="btn btn-secondary">Back</a>
          <button type="submit" class="btn btn-primary">Save Ingredient</button>
        </div>
        
      </form>
    </div>
  </div>

@endsection