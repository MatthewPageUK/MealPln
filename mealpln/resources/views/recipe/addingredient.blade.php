<!-- recipe / addingredient.blade.php -->

<div class="card mt-3">

    <div class="card-header">
        <h4>Add Ingredient</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('recipes.addingredient', $recipe->id) }}" method="post">
            @csrf
            <select name="ingredient">
            <option value="">Choose</option>
            @foreach($allIngredients as $ing)
                <option value="{{ $ing->id }}">{{ $ing->name }}</option>
            @endforeach
            </select>
            <input type="text" name="quantity" value="1"> 
            <button class="btn btn-primary" type="submit">Add</button>
        </form>
    </div>

</div>