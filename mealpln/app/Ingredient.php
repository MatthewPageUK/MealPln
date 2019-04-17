<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['name', 'description', 'priceperunit'];

    /**
     * Get the quantity if there is a recipe attached
     * Return as human readable with trailing 0 removed
     * 
     * @return String
     */
    public function getQuantityInRecipeHuman()
    {
        if($this->pivot->quantity > 0)
        {
            return rtrim(rtrim($this->pivot->quantity, '0'), '.');
        }
        else
        {
            return '0';
        }
    }

    /**
     * Recipes this ingredient is used in
     * 
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function recipes() 
    {
        return $this->belongsToMany('App\Recipe')
            ->orderBy('name');
    }
}
