<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;

class MealController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function all () 
    {
        $meals = Meal::all();
        return view('meals.all', compact('meals'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('meals.create');
    }

    public function store (Request $request) 
    {
    	$this->validate($request, [
    		'name' => 'required'
    	]);

        $meal = new Meal($request->all());
        $meal->user_id = $request->user()->id;
    	$meal->save();
        return back();
    }
}