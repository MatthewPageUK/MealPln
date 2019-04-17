<!-- recipe / addingredient.blade.php -->

<div class="card mt-3">

    <div class="card-header">
        <h4>Add Ingredient</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('recipes.addingredient', $recipe->id) }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <select name="ingredient" class="form-control">
                        <option value="">Choose</option>
                        @foreach($allIngredients as $ing)
                            <option value="{{ $ing->id }}">{{ $ing->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <input class="form-control mx-sm-1" type="text" name="quantity" value="1"> 
                </div>
                <div class="col">
                    <button class="btn btn-primary" type="submit">Add</button>
                </div>
            </div>
        </form>
    </div>

</div>