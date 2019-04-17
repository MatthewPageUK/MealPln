<!-- day / show.blade.php -->

@extends('layout.page')

@section('title')
  {{ $day->name }} ~ Planner
@endsection

@section('description')
  Plan your {{ $day->name }} meals
@endsection

@section('content')

  <div class="card">

    <div class="card-header">
      <h3>{{ $day->name }}</h3>
    </div>
  
    <div class="card-body">

      @foreach($day->meals as $meal)

        <h3>{{ $meal->name }}</h3>

        <ul>
        @foreach($meal->getDayRecipes($day->id) as $recipe)
          <li>{{ $recipe->name }}</li>
        @endforeach
        </ul>

      @endforeach



      <form method="post" action="{{ route('days.addrecipe', $day->id)}}">
        @csrf
        <select name="recipe">
            <option>Choose recipe</option>
            @foreach($allRecipes as $recipe)
              <option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
            @endforeach
        </select>

        <select name="meal">
            <option>Choose a meal</option>
            @foreach($day->meals as $meal)
              <option value="{{ $meal->id }}">{{ $meal->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary">Add Recipe</button>

      </form>
      
    </div>
  </div>

@endsection