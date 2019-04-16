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
            <li class="nav-item {{ Request::is('weekly') || Request::is('weekly/*') ? 'active' : '' }}">
                <a class="nav-link" href="/recipes/">Week View</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/meals/">Meals</a>
            </li>
            <li class="nav-item {{ Request::is('recipes') || Request::is('recipes/*') ? 'active' : '' }}">
                <a class="nav-link" href="/recipes/">Recipes</a>
            </li>
            <li class="nav-item {{ Request::is('ingredients') || Request::is('ingredients/*') ? 'active' : '' }}">
                <a class="nav-link" href="/ingredients/">Ingredients</a>
            </li>
        </ul>
    </div>
</nav>