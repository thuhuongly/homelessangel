@extends('layouts.app')
@section('title') Home :: @parent @endsection
@section('content')
<div class="row">
    <div class="page-header">
        <h2>Home Page</h2>
    </div></div>

    @if(count($users)>0)
        <div class="row">
            <h2>Available users</h2>
            @foreach ($users as $user)
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>
                                <strong><a href="{{url('user'.$user->name.'')}}">{{
                                        $user->description }}</a></strong>
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <a href="{{url('user/'.$user->id.'')}}" class="thumbnail"><img
                                        src="http://placehold.it/260x180" alt=""></a>
                        </div>
                        <div class="col-md-10">
                            <p>{!! $user->description !!}</p>

                            <p>
                                <a class="btn btn-mini btn-default"
                                   href="{{url('user/'.$user->id.'')}}">Read more</a>
                            </p>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    @endif

@endsection

