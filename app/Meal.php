<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
	protected $fillable = ['name'];

    public function foods () 
    {
    	return $this->hasMany(Food::class);
    }

    public function user () 
    {
    	return $this->belongsTo(User::class);
    }

    public function path () 
    {
    	return '/meal/' . $this->id;
    }

    public function addFood (Food $food) 
    {
    	$food->meal_id = $this->id;
    	return $this->foods()->save($food);
    }
}
