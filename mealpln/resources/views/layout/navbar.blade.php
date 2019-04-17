<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">MealPln</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="/">Home</a>
            </li>
        
            <li class="nav-item {{ Request::is('days') || Request::is('days/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('days.index') }}">Days</a>
            </li>
        
            <li class="nav-item {{ Request::is('meals') || Request::is('meals/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('meals.index') }}">Meals</a>
            </li>
        
            <li class="nav-item {{ Request::is('recipes') || Request::is('recipes/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('recipes.index') }}">Recipes</a>
            </li>
        
            <li class="nav-item {{ Request::is('ingredients') || Request::is('ingredients/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('ingredients.index') }}">Ingredients</a>
            </li>
        
        </ul>
    </div>
</nav>