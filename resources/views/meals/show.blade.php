@extends('layouts.app')

@section('content')
	<h1>{{ $meal->name }}</h1>
	@foreach ($meal->foods() as $food)
		<li>{{ $food->name }}</li>
	@endforeach
@stop