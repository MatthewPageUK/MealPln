<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = ['name', 'sortorder'];

    public function getDayRecipes($day)
    {
        return $this->belongsToMany('App\Recipe')
            ->orderBy('name');
        // return $this->belongsToMany('App\Recipe')
        //     ->wherePivot('day_id', $day)
        //     ->orderBy('name');
    }
    public function recipes() 
    {
        // meal and day index ??
        return $this->belongsToMany('App\Recipe')
            ->orderBy('name');
    }
}
