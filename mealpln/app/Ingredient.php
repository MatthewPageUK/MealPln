<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['name', 'description', 'priceperunit'];

    /**
     * Recipes this ingredient is used in
     */
    public function recipes() 
    {
        return $this->belongsToMany('App\Recipe')
            ->orderBy('name');
    }
}
