<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['name', 'description'];

    /**
     * The Ingredients of this recipe.
     * 
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient')
            ->withPivot('quantity')
            ->orderBy('name', 'asc');
    }
    /**
     * The total price of this recipe
     * 
     */
    public function getPrice() 
    {
        $price = 0;
        foreach($this->ingredients as $ingredient)
        {
            $price += $ingredient->priceperunit * $ingredient->pivot->quantity;
        }
        return $price;
    }

}
