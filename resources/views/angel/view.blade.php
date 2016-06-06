@extends('layouts.app')
{{-- Web site Title --}}
@section('title') {!!  $angel->name !!} :: @parent @endsection

@section('meta_author')
    <meta name="author" content="{!! $angel->username !!}"/>
@endsection
{{-- Content --}}
@section('content')
    <h3>{{ $angel->name }}</h3>
    <p>{!! $angel->address !!}</p>
    @if($angel->picture!=null)
        <img alt="{{$angel->picture}}"
             src="{!! url('appfiles/angel/'.$angel->id.'/'.$angel->picture) !!}"/>
    @endif
    <div>
        <span class="badge badge-info">Posted {!!  $angel->created_at !!} </span>
    </div>
@endsection
