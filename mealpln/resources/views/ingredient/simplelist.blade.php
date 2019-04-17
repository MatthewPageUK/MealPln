<!-- inredient / simplelit.blade.php -->

<ul class="list-group list-group-flush">
    @foreach($ingredients as $ingredient)
    <li class="list-group-item">
        @if(isset($ingredient->pivot->quantity))
            <span>{{ $ingredient->getQuantityInRecipeHuman() }} x </span>
        @endif
        <a href="{{ route('ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
    </li>
    @endforeach
</ul>
