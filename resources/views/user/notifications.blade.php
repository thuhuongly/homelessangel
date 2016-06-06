@extends('layouts.app')
@section('title') Notifications :: @parent @endsection
@section('content')
<div class="row">
    <div class="page-header">
        <h2>Notifications</h2>
    </div></div>
    @foreach($unreadNotifications as $notification)
        <div class="notification {{ $notification->type }}">
            <h2><p class="subject">{{ $notification->subject }}</p></h2>
            <p class="body">{{ $notification->body }}</p>

            @if($notification->type == 'Offer' && $notification->hasValidObject())
                <p>
                    <a class="btn btn-success" href="{{url('/angel/offer/'. $notification->getObject()->id.'/'.$notification->id.'/accept')}}"> Accept</a>
                    <a class="btn btn-danger" href="{{url('/angel/offer/'. $notification->getObject()->id.'/'.$notification->id.'/reject')}}"> Reject</a>
                </p>
            @endif
        </div>
    @endforeach

@endsection

