@extends('layout.page')
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
<div class="row">
    <div class="col-sm-4">
        <div class="card" style="">
            <div class="card-header">
                Breakfast
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#">Bowl of cereal</a></l1>
                <li class="list-group-item">Toast and jam</li>
                <li class="list-group-item">Glass of juice</li>
                <li class="list-group-item">Pot of tea</li>
            </ul>
            <a href="d" class="btn btn-primary">Add</a> 
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card" style="">
            <div class="card-header">
                Lunch
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#">Bowl of cereal</a></l1>
                <li class="list-group-item">Toast and jam</li>
                <li class="list-group-item">Glass of juice</li>
                <li class="list-group-item">Pot of tea</li>
            </ul>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card" style="">
            <div class="card-header">
                Dinner
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#">Bowl of cereal</a></l1>
                <li class="list-group-item">Toast and jam</li>
                <li class="list-group-item">Glass of juice</li>
                <li class="list-group-item">Pot of tea</li>
            </ul>
        </div>
    </div>
</div>

            </div>
        </div>
@endsection
