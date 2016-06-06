@extends('layouts.app')
{{-- Web site Title --}}
@section('title') {!!  $homeless->nickname !!} :: @parent @endsection

{{--@section('meta_author')
    <meta name="author" content="{!! $homeless->author->username !!}"/>
@endsection--}}
{{-- Content --}}
@section('content')
    <h3>{{ $homeless->nickname }}</h3>
    <p>{{ $homeless->location }}</p>
    @if($homeless->picture!="")
        <img alt="{{$homeless->picture}}"
             src="{!! url('homeless'.$homeless->id.'/'.$homeless->picture) !!}"/>
    @endif
    <div>
        <span class="badge badge-info">Posted {!!  $homeless->created_at !!} </span>
    </div>
@endsection
