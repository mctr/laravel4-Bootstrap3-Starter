@extends('layout.layout')

@section('title')
  Anasayfa
@stop

@section('content')
	<br />
	<center>
		<h1>Laravel 4.1 Starter</h1>
		<h1>Butonlar</h1>
	</center>
	<br />
	<center>
			<a href="{{ URL::to('#') }}" class="btn btn-info">İnfo</a>
			<a href="{{ URL::to('#') }}" class="btn btn-primary">Primary</a>
			<a href="{{ URL::to('#') }}" class="btn btn-success">Success</a>
			<a href="{{ URL::to('#') }}" class="btn btn-danger">Danger</a>
			<a href="{{ URL::to('#') }}" class="btn btn-default">Default</a>
	</center>
	<br /><br />
	
	<!--
	TODO: Form oluşturma tam anlamıyla böyle yapılmıyor.
	Bu sadece başlangıç için böyle oluşturulmuştur.  
	-->
	
	<center><img src="assets/img/logo.png" ><h1>Form</h1></center>
	<form role="form">
	  <div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
	  </div>
	  <div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	  </div>
	  <div class="form-group">
		<label for="exampleInputFile">File input</label>
		<input type="file" id="exampleInputFile">
		<p class="help-block">Example block-level help text here.</p>
	  </div>
	  <div class="checkbox">
		<label>
		  <input type="checkbox"> Check me out
		</label>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>	
@stop
