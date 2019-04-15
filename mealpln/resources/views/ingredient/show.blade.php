<!-- show.blade.php -->

@extends('layout')

@section('title')
    Ingredient : {{ $ingredient->name }} : 
@endsection

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Ingredient Details
  </div>
  <div class="card-body">
    <div class="form-group">
        <label for="name">Ingredient Name:</label>
        {{ $ingredient->name }}
    </div>
    <div class="form-group">
        <label for="price">Description :</label>
        {{ $ingredient->description }}
    </div>
    <div class="form-group">
        <label for="quantity">Price :</label>
        £{{ $ingredient->priceperunit }}
    </div>
  </div>
</div>

<div class="card uper">
  <div class="card-header">
    Used in
  </div>
  <div class="card-body">
    recipes....
  </div>
</div>

<div class="card uper">
  <div class="card-header">
    Weekly use
  </div>
  <div class="card-body">
    Mon, Tue, Wed, ...
  </div>
</div>
@endsection