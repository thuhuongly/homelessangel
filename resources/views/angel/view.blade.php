@extends('layouts.app')
{{-- Web site Title --}}
@section('title') {!!  $angel->name !!} :: @parent @endsection

@section('meta_author')
    <meta name="author" content="{!! $angel->username !!}"/>
@endsection
{{-- Content --}}
@section('content')
    @if($angel->picture!=null)
        <img alt="{{$angel->picture}}"
             src="{!! url($angel->picture) !!}"/>
    @endif
    <h3>{{ $angel->name }}</h3>
    <p>Location: {!! $angel->address !!}</p>
    <p>Amount of items successfully given: {!! $angel->totalGiving !!}</p>
    @if(count($offers)>0)
        <div class="row">
            <p>Available offers</p>
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
    @endif
@endsection
