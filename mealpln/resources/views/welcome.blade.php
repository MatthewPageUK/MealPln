@extends('layout')
@section('title')
    Welcome
@endsection
@section('content')


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Welcome to MealPln, a simple food and meal planner.
                </div>
                <h1>Todays Menu</h1>

                <h2>Breakfast</h2>
                <ul>
                    <li>Bowl of cereal</l1>
                    <li>Toast and jam</li>
                    <li>Glass of juice</li>
                    <li>Pot of tea</li>
                </ul>
                <h2>Lunch</h2>

                <h2>Dinner</h2>
            </div>
        </div>
@endsection
