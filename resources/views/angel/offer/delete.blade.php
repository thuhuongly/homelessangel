@extends('angel.layouts.modal')
@section('content')
	{!! Form::model($offer, array('url' => url('angel/offer') . '/' . $offer->id, 'method' => 'delete', 'class' => 'bf', 'files'=> true)) !!}
	<div class="form-group">
		<div class="controls">
			{{ trans("angel/modal.delete_message") }}<br>
			<element class="btn btn-warning btn-sm close_popup">
				<span class="glyphicon glyphicon-ban-circle"></span> {{
			trans("angel/modal.cancel") }}</element>
			<button type="submit" class="btn btn-sm btn-danger">
				<span class="glyphicon glyphicon-trash"></span> {{
				trans("angel/modal.delete") }}
			</button>
		</div>
	</div>
	{!! Form::close() !!}
@endsection
