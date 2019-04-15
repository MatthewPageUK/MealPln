@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Description</td>
          <td>Price</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($ingredients as $ingredient)
        <tr>
            <td>{{$ingredient->id}}</td>
            <td><a href="{{ route('ingredients.show',$ingredient->id)}}">{{$ingredient->name}}</a></td>
            <td>{{$ingredient->description}}</td>
            <td>{{$ingredient->priceperunit}}</td>
            <td><a href="{{ route('ingredients.edit',$ingredient->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('ingredients.destroy', $ingredient->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection