@extends('layout.layout')

@section('title')
	Admin
@stop

@section('content')
	<div class="col-md-4 col-md-offset-4 well">
		<h4>Hello {{ ucwords(Auth::user()->firstname) }}</h4>
	</div>

@stop
