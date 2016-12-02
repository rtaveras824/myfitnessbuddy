<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use App\Food;

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

    public function show (Meal $meal) 
    {
        $meal = $meal->load('foods');
        return view('meals.show', compact('meal'));
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

    public function storeFood (Request $request, Meal $meal) 
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $food = new Food($request->all());
        $meal->addFood($food);
        return back();
    }
}