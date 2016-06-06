@extends('layouts.app')
{{-- Web site Title --}}
@section('title')
	@parent
@endsection

@section('content')
	@if(count($angels)>0)
		<div class="row">
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
							<a href="{{url($angel->picture)}}" class="thumbnail"><img
										src="{{url($angel->picture)}}" alt=""></a>
						</div>
						<div class="col-md-10">
							<p>{!! $angel->address !!}</p>
						</div>
					</div>

				</div>
			@endforeach
		</div>
	@endif
@endsection
