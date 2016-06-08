@extends('layouts.app')
{{-- Web site Title --}}
@section('title')
	@parent
@endsection
@section('content')
	@if(count($angels)>0)
		<div class="row">
			{!! Form::open(['method'=>'GET','url'=>'angels','class'=>'navbar-form navbar-left','role'=>'search'])  !!}

			<div class="input-group custom-search-form">
				<input type="text" class="form-control" name="search" placeholder="Search by name...">
			<span class="input-group-btn">
				<button class="btn btn-default-sm" type="submit">
					<i class="fa fa-search"></i>
				</button>
			</span>
			</div>
			{!! Form::close() !!}

			{!! Form::open(['method'=>'GET','url'=>'angels','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
		<h2>List of angels</h2>

		@foreach ($angels as $angel)
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-8">
							<h4>
								<strong><a href="{{url('angel/'.$angel->id.'')}}">{{
                                        $angel->name }}</a></strong>
							</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<a href="{{url('angel/'.$angel->id.'')}}" class="thumbnail"><img
										src="{{url($angel->picture)}}" alt=""></a>
						</div>
						<div class="col-md-10">
							<p>{!! $angel->address !!}</p>
						</div>
					</div>

				</div>
			@endforeach
		</div>

		@else
			<h2>No results</h2>
	@endif
@endsection
