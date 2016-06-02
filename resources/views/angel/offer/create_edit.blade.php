@extends('angel.layouts.modal')
{{-- Content --}}
@section('content')
        <!-- Tabs -->
<ul class="nav nav-tabs">
    <li class="active"><a href="#tab-general" data-toggle="tab"> {{
			trans("angel/modal.general") }}</a></li>
</ul>
<!-- ./ tabs -->
@if (isset($offer))
{!! Form::model($offer, array('url' => url('angel/offer') . '/' . $offer->id, 'method' => 'put','id'=>'fupload', 'class' => 'bf', 'files'=> true)) !!}
@else
{!! Form::open(array('url' => url('angel/offer'), 'method' => 'post', 'class' => 'bf','id'=>'fupload', 'files'=> true)) !!}
@endif
        <!-- Tabs Content -->
<div class="tab-content">
    <!-- General tab -->
    <div class="tab-pane active" id="tab-general">
        <div class="form-group  {{ $errors->has('type') ? 'has-error' : '' }}">
            {!! Form::label('type', trans("angel/modal.type"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('type', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('type', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('category') ? 'has-error' : '' }}">
            {!! Form::label('category', trans("angel/offer.category"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('category', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('category', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('description') ? 'has-error' : '' }}">
            {!! Form::label('description', trans("angel/offer.description"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('content', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('amount') ? 'has-error' : '' }}">
            {!! Form::label('amount', trans("angel/offer.amount"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('amount', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('amount', ':message') }}</span>
            </div>
        </div>
        <div
                class="form-group {!! $errors->has('picture') ? 'error' : '' !!} ">
            <div class="col-lg-12">
                {!! Form::label('source', trans("angel/offer.picture"), array('class' => 'control-label')) !!}
                <input name="picture"
                       type="file" class="uploader" id="image" value="Upload"/>
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
						trans("angel/modal.cancel") }}
        </button>
        <button type="reset" class="btn btn-sm btn-default">
            <span class="glyphicon glyphicon-remove-circle"></span> {{
						trans("angel/modal.reset") }}
        </button>
        <button type="submit" class="btn btn-sm btn-success">
            <span class="glyphicon glyphicon-ok-circle"></span>
            @if	(isset($offer))
                {{ trans("angel/modal.edit") }}
            @else
                {{trans("angel/modal.create") }}
            @endif
        </button>
    </div>
</div>
<!-- ./ form actions -->

</form>
@endsection
