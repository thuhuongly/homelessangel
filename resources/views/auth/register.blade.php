@extends('layouts.app')

{{-- Web site Title --}}
@section('title') {!! trans('site/user.register') !!} :: @parent @endsection

{{-- Content --}}
@section('content')
    <div class="row">
        <div class="page-header">
            <h2>{!! trans('site/user.register') !!}</h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            {!! Form::open(array('url' => url('auth/register'), 'method' => 'post', 'files'=> true)) !!}
            <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('name', trans('site/user.name'), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('name', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('name', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('username') ? 'has-error' : '' }}">
                {!! Form::label('username', 'Username', array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('username', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('username', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('email', trans('site/user.e_mail'), array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::text('email', null, array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                {!! Form::label('password', "Password", array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::password('password', array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                {!! Form::label('password_confirmation', "Confirm Password", array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                    <span class="help-block">{{ $errors->first('password_confirmation', ':message') }}</span>
                </div>
            </div>
            <div class="form-group  {{ $errors->has('admin') ? 'has-error' : '' }}">
                {!! Form::label('admin', 'Register as', array('class' => 'control-label')) !!}
                <div class="controls">
                    {!! Form::label('admin', trans("admin/users.angel"), array('class' => 'control-label')) !!}
                    {!! Form::radio('admin', '2', true) !!}
                    {!! Form::label('admin', trans("admin/users.homeless"), array('class' => 'control-label')) !!}
                    {!! Form::radio('admin', '3') !!}
                    <span class="help-block">{{ $errors->first('admin', ':message') }}</span>
                </div>
            </div>
            {{-- Angel --}}
            <fieldset>
                <legend><h2>Angel's information</h2></legend>
                <div class="form-group  {{ $errors->has('a_date_of_birth') ? 'has-error' : '' }}">
                    {!! Form::label('a_date_of_birth', "Date of birth", array('class' => 'control-label')) !!}
                    <div class="controls">
                        {!! Form::date('a_date_of_birth', null, array('class' => 'form-control')) !!}
                        <span class="help-block">{{ $errors->first('a_date_of_birth', ':message') }}</span>
                    </div>
                </div>
                <div class="form-group  {{ $errors->has('address') ? 'has-error' : '' }}">
                    {!! Form::label('address', "Address", array('class' => 'control-label')) !!}
                    <div class="controls">
                        {!! Form::text('address', null, array('class' => 'form-control')) !!}
                        <span class="help-block">{{ $errors->first('address', ':message') }}</span>
                    </div>
                </div>
                <div class="form-group  {{ $errors->has('profession') ? 'has-error' : '' }}">
                    {!! Form::label('profession', "Profession", array('class' => 'control-label')) !!}
                    <div class="controls">
                        {!! Form::text('profession', null, array('class' => 'form-control')) !!}
                        <span class="help-block">{{ $errors->first('profession', ':message') }}</span>
                    </div>
                </div>

                <div
                        class="form-group {!! $errors->has('picture') ? 'error' : '' !!} ">
                    <div class="col-lg-12">
                        {!! Form::label('picture', trans("transaction"), array('class' => 'control-label')) !!}
                        <input name="picture"
                               type="file" class="uploader" id="picture" value="Upload"/>
                    </div>

                </div>
                <div class="form-group  {{ $errors->has('anonymous') ? 'has-error' : '' }}">
                    {!! Form::label('anonymous', 'Appear as anonymous', array('class' => 'control-label')) !!}
                    <div class="controls">
                        {!! Form::label('anonymous', 'No', array('class' => 'control-label')) !!}
                        {!! Form::radio('anonymous', '0', true) !!}
                        {!! Form::label('anonymous', 'Yes', array('class' => 'control-label')) !!}
                        {!! Form::radio('anonymous', '1') !!}
                        <span class="help-block">{{ $errors->first('anonymous', ':message') }}</span>
                    </div>
                </div>
            </fieldset>
            {{-- Homeless --}}
            <fieldset>
                <legend><h2>Homeless's information</h2></legend>
                <div class="form-group  {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
                    {!! Form::label('date_of_birth', "Date of birth", array('class' => 'control-label')) !!}
                    <div class="controls">
                        {!! Form::date('date_of_birth', null, array('class' => 'form-control')) !!}
                        <span class="help-block">{{ $errors->first('date_of_birth', ':message') }}</span>
                    </div>
                </div>
                <div class="form-group  {{ $errors->has('location') ? 'has-error' : '' }}">
                    {!! Form::label('location', "Location", array('class' => 'control-label')) !!}
                    <div class="controls">
                        {!! Form::text('location', null, array('class' => 'form-control')) !!}
                        <span class="help-block">{{ $errors->first('location', ':message') }}</span>
                    </div>
                </div>
                <div class="form-group  {{ $errors->has('homeless_years') ? 'has-error' : '' }}">
                    {!! Form::label('homeless_years', "Amount of years living on the street", array('class' => 'control-label')) !!}
                    <div class="controls">
                        {!! Form::text('homeless_years', null, array('class' => 'form-control')) !!}
                        <span class="help-block">{{ $errors->first('homeless_years', ':message') }}</span>
                    </div>
                </div>
                <div
                        class="form-group {!! $errors->has('picture') ? 'error' : '' !!} ">
                    <div class="col-lg-12">
                        {!! Form::label('hlPicture', trans("angel/offer.picture"), array('class' => 'control-label')) !!}
                        <input name="hlPicture"
                               type="file" class="uploader" id="hlPicture" value="Upload"/>
                    </div>

                </div>
            </fieldset>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
