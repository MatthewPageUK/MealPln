<!-- recipe / simplelit.blade.php -->

<ul class="list-group list-group-flush">
    @foreach($recipes as $recipe)
    <li class="list-group-item">
        <a href="{{ route('recipes.show', $recipe->id) }}">{{ $recipe->name }}</a>
    </li>
    @endforeach
</ul>
