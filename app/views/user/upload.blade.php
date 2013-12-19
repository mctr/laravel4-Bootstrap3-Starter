@extends('layout.layout')

@section('title')
	File Upload
@stop

@section('content')
	<div class="col-md-8 col-md-offset-3" id="upload_modal">

			<button type="close" class="close" data-dismiss="modal"><a href="{{ URL::to('upload') }}">&times;</a></button>
			<h3>File Upload</h3>

		{{ Form::Open(array('url' => 'upload', 'id' => 'upload_modal_form', 'enctype' => 'multipart/form-data')) }}
		{{ Form::label('Photo', 'Photo') }}
		{{ Form::file('photo') }}
		{{ Form::label('description', 'Description') }}
		{{ Form::text('description', '', array('placeholder' => 'Describe your Photo here!', 'id' => 'description', 'class' => 'col-md-5' )) }}
		{{ Form::close() }}
			<br>
 			<a href="#" class="btn btn-danger" data-dismiss="modal">İptal</a>
 			<button type="button" onClick="$('#upload_modal_form').submit();" class="btn btn-primary">Upload Photo</button>

	</div>




@stop
