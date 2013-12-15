@extends('layout.layout')

@section('title')
	Register
@stop

@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<center><h2>Laravel 4 Starter Register</h2></center>
		</div>
	</div><br>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<center><legend><h1>Starter</h1></legend></center><hr>
			<center>
				{{ Form::Open(array('url' => 'register')) }}
				@if($errors->any())
				<div class="alert alert-error">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					{{ implode('', $error->all('<li class="error">:message</li>')) }}
				</div>
				@endif
				{{ Form::text('firstname', '', array('placeholder' => 'First Name')) }}<br><br>
				{{ Form::text('lastname', '', array('placeholder' => 'Last Name')) }}<br><br>
				{{ Form::text('email', '', array('placeholder' => 'E-mail')) }}<br><br>
				{{ Form::password('password', array('placeholder' => 'Password')) }}<br><br>
				{{ Form::Submit('Kaydol', array('class' => 'btn btn-success')) }}
				{{ HTML::link('/', 'İptal', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
				
			</center>
		</div>
	</div>


@stop
