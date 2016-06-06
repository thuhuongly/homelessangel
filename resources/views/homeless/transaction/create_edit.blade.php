@extends('layouts.app')
{{-- Content --}}
@section('content')
        <!-- Tabs -->
<ul class="nav nav-tabs">
    <li class="active"><a href="#tab-general" data-toggle="tab"> Create new request</a></li>
</ul>
<!-- ./ tabs -->
@if (isset($transaction))
{!! Form::model($transaction, array('url' => url('homeless/transaction') . '/' . $transaction->id, 'method' => 'put')) !!}
@else
{!! Form::open(array('url' => url('homeless/transaction'), 'method' => 'post', 'class' => 'bf')) !!}
@endif
        <!-- Tabs Content -->
<div class="tab-content">
    <!-- General tab -->
    <input class="form-control" name="offer_id" type="hidden" id="offer_id" value="{{$offer->id}}">
    <div class="tab-pane active" id="tab-general">
       {{-- <div class="form-group  {{ $errors->has('amount') ? 'has-error' : '' }}">
            {!! Form::label('amount', trans("homeless/modal.amount"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('amount', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('amount', ':message') }}</span>
            </div>
        </div>--}}
        <div class="form-group  {{ $errors->has('address') ? 'has-error' : '' }}">
            {!! Form::label('address', trans("homeless/modal.address"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('address', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('address', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('date_pick_up') ? 'has-error' : '' }}">
            {!! Form::label('date_pick_up', trans("homeless/modal.datePickup"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::date('date_pick_up', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('date_pick_up', ':message') }}</span>
            </div>
        </div>
        <!-- ./ general tab -->
    </div>
    <!-- ./ tabs content -->
</div>

<!-- Form Actions -->

<div class="form-group">
    <div class="col-md-12">
        <button type="reset" class="btn btn-sm btn-warning close_popup">
            <span class="glyphicon glyphicon-ban-circle"></span> {{
						trans("homeless/modal.cancel") }}
        </button>
        <button type="reset" class="btn btn-sm btn-default">
            <span class="glyphicon glyphicon-remove-circle"></span> {{
						trans("homeless/modal.reset") }}
        </button>
        <button type="submit" class="btn btn-sm btn-success">
            <span class="glyphicon glyphicon-ok-circle"></span>
            @if	(isset($transaction))
                {{ trans("homeless/modal.edit") }}
            @else
                {{trans("homeless/modal.create") }}
            @endif
        </button>
    </div>
</div>
<!-- ./ form actions -->

</form>
@endsection
