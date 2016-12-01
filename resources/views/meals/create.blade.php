@extends('layouts.app')

@section('content')
<div class="panel-heading">
    <h1>Meals test</h1>
</div>
<div class="panel-body">
<form class="form-horizontal" role="form" method="POST" action="{{ url('/meals/add') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Meal Name</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Create Meal
            </button>
        </div>
    </div>
</form>
</div>

@stop