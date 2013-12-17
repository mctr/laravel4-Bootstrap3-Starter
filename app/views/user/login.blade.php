@extends('layout.layout')

@section('title')
	Login
@stop

@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<center><h2>Laravel 4 Starter Login</h2></center>
		</div>
	</div><br>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<center><legend><h1>Starter</h1></legend></center>
			<center>
				{{ Form::Open(array('url' => 'login')) }}
				@if(Session::get('message'))
					<a href="{{ URL::to('login') }}" class="close" data-dismiss="alert">&times;</a>
					<div class="alert alert-danger">{{ Session::get('message') }}</div>
				@endif
				{{ Form::text('email', '', array('placeholder' => 'E-mail')) }}<br><br>
				{{ Form::password('password', array('placeholder' => 'Password')) }}<br><br>
				{{ Form::Submit('Giriş', array('class' => 'btn btn-success')) }}
				{{ HTML::link('register', 'Register', array('class' => 'btn btn-primary')) }}
				{{ Form::close() }}
				
			</center>
		</div>
	</div>


@stop
