@extends('layouts.app')
{{-- Web site Title --}}
@section('title')
	@parent
@endsection

@section('content')
	@foreach($homeless as $homeles)
		<h3>{{ $homeles->nickname }}</h3>
		<p>{!! $homeles->location !!}</p>
		<div>
			<a class="btn btn-success" href="{{ url('homeless/'.$homeles->id) }}">Read more</a>
		</div>
	@endforeach
	{!! $homeless->render() !!}
@endsection
