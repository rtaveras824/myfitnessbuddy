@extends('layouts.app')

@section('content')
	<div class="panel-heading">
		All Meals
	</div>
	<div class="panel-body">
		@foreach ($meals as $meal)
			<a href="{{ $meal->path() }}">{{ $meal->name }}</a>
		@endforeach
	</div>
@stop