@extends('layouts.app')
{{-- Web site Title --}}
@section('title') {!!  $offer->type !!} :: @parent @endsection

{{--@section('meta_author')
    <meta name="author" content="{!! $offer->author->username !!}"/>
@endsection--}}
{{-- Content --}}
@section('content')
    <h3>{{ $offer->type }}</h3>
    <p>{!! $offer->description !!}</p>
    @if($offer->picture!="")
        <img alt="{{$offer->picture}}"
             src="{!! url('offer'.$offer->id.'/'.$offer->picture) !!}"/>
    @endif
    <p>{!! $offer->amount !!}</p>
    <div>
        <a class="btn btn-success" href="{{ url('/homeless/transaction/create/'.$offer->id) }}"> Request</a>
    </div>
    <div>
        <span class="badge badge-info">Posted {!!  $offer->created_at !!} </span>
    </div>
@endsection
