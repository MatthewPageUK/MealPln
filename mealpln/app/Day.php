<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable = ['name', 'sortorder'];    

    /**
     * The meals for this day.
     * 
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function meals()
    {
        return $this->belongsToMany('App\Meal')
            ->orderBy('sortorder', 'asc');
    }

}
