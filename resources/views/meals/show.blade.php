@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>{{ $meal->name }}</h1>
			<div class="panel panel-default">
				<div class="panel-heading">Protein: {{ $totalProtein }} Carbohydrates: {{ $totalCarbohydrates }} Fat: {{ $totalFat }}</div>
				<table class="table">
					<tr>
						<th>Name</th>
						<th>Protein</th>
						<th>Carbohydrates</th>
						<th>Fat</th>
					</tr>
					@foreach ($meal->foods as $food)
						<tr>
							<td>{{ $food->name }}</td>
							<td>{{ $food->protein }}</td>
							<td>{{ $food->carbohydrate }}</td>
							<td>{{ $food->fat }}</td>
						</tr>
					@endforeach
				</table>

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