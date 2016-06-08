@extends('layouts.app')
{{-- Web site Title --}}
@section('title')
	@parent
@endsection

@section('content')
	{!! Form::open(['method'=>'GET','url'=>'homeless','class'=>'navbar-form navbar-left','role'=>'search'])  !!}

	<div class="input-group custom-search-form">
		<input type="text" class="form-control" name="search" placeholder="Search by name...">
			<span class="input-group-btn">
				<button class="btn btn-default-sm" type="submit">
					<i class="fa fa-search"></i>
				</button>
			</span>
	</div>
	{!! Form::close() !!}

	{!! Form::open(['method'=>'GET','url'=>'homeless','class'=>'navbar-form navbar-left','role'=>'search'])  !!}

	@if(count($homeless)>0)
		<div class="row">
			<h2>List of homeless people</h2>
			@foreach ($homeless as $homeles)
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-8">
							<h4>
								<strong><a href="{{url('homeless/'.$homeles->id.'')}}">{{
                                        $homeles->nickname }}</a></strong>
							</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<a href="{{url('homeless/'.$homeles->id.'')}}" class="thumbnail"><img
										src="{{url($homeles->picture)}}" alt=""></a>
						</div>
						<div class="col-md-10">
							<p>{!! $homeles->location !!}</p>
						</div>
					</div>

				</div>
			@endforeach
		</div>
		@else
		<h2>No results</h2>
	@endif
@endsection
