@extends('layouts.app')
{{-- Web site Title --}}
@section('title') {!!  $angel->name !!} :: @parent @endsection

@section('meta_author')
    <meta name="author" content="{!! $angel->username !!}"/>
@endsection
{{-- Content --}}
@section('content')
    <h3>{{ $angel->name }}</h3>
    <p>Location: {!! $angel->address !!}</p>
    <p>Amount of items successfully given: {!! $angel->totalGiving !!}</p>
    @if($angel->picture!=null)
        <img alt="{{$angel->picture}}"
             src="{!! url($angel->picture) !!}"/>
    @endif
    <div>
        <span class="badge badge-info">Posted {!!  $angel->created_at !!} </span>
    </div>
@endsection
