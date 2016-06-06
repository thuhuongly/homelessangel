@extends('layouts.app')
{{-- Web site Title --}}
@section('title')
	@parent
@endsection

@section('content')
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
							<a href="{{url($homeles->picture)}}" class="thumbnail"><img
										src="{{url($homeles->picture)}}" alt=""></a>
						</div>
						<div class="col-md-10">
							<p>{!! $homeles->location !!}</p>
						</div>
					</div>

				</div>
			@endforeach
		</div>
	@endif
@endsection
