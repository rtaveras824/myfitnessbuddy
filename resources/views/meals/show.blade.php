@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>{{ $meal->name }}</h1>
			<div class="panel panel-default">
				@foreach ($meal->foods as $food)
					<li>{{ $food->name }}</li>
				@endforeach

				<form method="POST" action="/meal/{{ $meal->id }}/addfood">
					<!-- <input type="hidden" name="user_id" value="1"> -->

					<div class="form-group">
						<label for="food name" class="col-md-4 control-label">Name</label>
						<textarea class="form-control" name="name">{{ old('name') }}</textarea>
					</div>

					
					<div class="form-group">
						<label for="protein" class="col-md-4 control-label">Protein</label>
						<textarea class="form-control" name="protein">{{ old('protein') }}</textarea>
					</div>

					<div class="form-group">
						<label for="carbohydrates" class="col-md-4 control-label">Carbohydrates</label>
						<textarea class="form-control" name="carbohydrate">{{ old('carbohydrates') }}</textarea>
					</div>

					<div class="form-group">
						<label for="fat" class="col-md-4 control-label">Fat</label>
						<textarea class="form-control" name="fat">{{ old('fat') }}</textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add Food</button>
					</div>

					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<!-- {{ csrf_field() }} -->
				</form>
			</div>
	</div>
@stop