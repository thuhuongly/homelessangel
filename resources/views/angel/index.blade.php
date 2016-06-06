@extends('layouts.app')
{{-- Web site Title --}}
@section('title')
	@parent
@endsection

@section('content')
	@foreach($angels as $angel)
		<h3>{{ $angel->name }}</h3>
		<p>{!! $angel->address !!}</p>
		<div>
			<a class="btn btn-success" href="{{ url('angel/'.$angel->id) }}">Read more</a>
		</div>
	@endforeach
	{!! $angels->render() !!}
@endsection
