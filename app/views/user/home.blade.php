@extends('layout.layout')

@section('title')
	Home
@stop

@section('content')

@if(Auth::user())
	<div class="col-md-6 col-md-offset-3 well">
		<div class="pull-right">{{ HTML::link('logout', 'Logout') }}</div><br>
		<h1>{{ ucwords(Auth::user()->firstname), ucwords(Auth::user()->lastname) }}</h1>
		<br>
		
	</div>
@else
	{{ HTML::link('login', 'Login') }}
@endif

<div class="col-md-6 col-md-offset-3 well">
	<h1>Dostum Login oldun.</h1>
</div>
@stop
