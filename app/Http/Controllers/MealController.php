<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('meals.create');
    }

    public function store (Request $request, Meal $meal) 
    {
    	$this->validate($request, [
    		'body' => 'required'
    	]);

    	
    }
}