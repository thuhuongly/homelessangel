@extends('layouts.app')
{{-- Web site Title --}}
@section('title')
	@parent
@endsection

@section('content')
	@foreach($services as $item)
		<h3>{{ $item->type }}</h3>
		<p>{!! $item->description !!}</p>
		<div>
			<a class="btn btn-success" href="{{ url('offer'.$item->id) }}">Read more</a>
		</div>
	@endforeach
	{!! $services->render() !!}
@endsection
