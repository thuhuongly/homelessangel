@extends('layouts.app')
{{-- Web site Title --}}
@section('title')
	@parent
@endsection

@section('content')
	{!! Form::open(['method'=>'GET','url'=>'offers','class'=>'navbar-form navbar-left','role'=>'search'])  !!}

	<div class="input-group custom-search-form">
		<input type="text" class="form-control" name="search" placeholder="Search by category...">
			<span class="input-group-btn">
				<button class="btn btn-default-sm" type="submit">
					<i class="fa fa-search"></i>
				</button>
			</span>
	</div>
	{!! Form::close() !!}

	{!! Form::open(['method'=>'GET','url'=>'offers','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
	@if(count($offers)>0)
		<div class="row">
			<h2>Available offers</h2>
			@foreach ($offers as $offer)
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-8">
								<h4>
									<strong><a href="{{url('offer/'.$offer->id.'')}}">{{
											$offer->category }}</a></strong>
								</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<a href="{{url('offer/'.$offer->id.'')}}" class="thumbnail"><img
											src="http://placehold.it/260x180" alt=""></a>
							</div>
							<div class="col-md-10">
								<p>Type: {!! $offer->type !!}</p>
								<p>Description: {!! $offer->description !!}</p>
								<p>Amount: {!! $offer->amount !!}</p>
								@if(Auth::check())
									@if(Auth::user()->admin==3)
										<p>
											<a class="btn btn-success" href="{{ url('/homeless/transaction/create/'.$offer->id) }}"> Request</a>
										</p>
									@endif
								@else
									<p>
										<a class="btn btn-success" href="{{ url('auth/login') }}"> Request </a>
									</p>
								@endif
							</div>
						</div>

					</div>
				@endforeach
			</div>

	@else
		<h2>No results</h2>
	@endif
@endsection
