@extends('angel.layouts.default')
@extends('layouts.app')
{{-- Web site Title --}}
{{-- Web site Title --}}
@section('title') {!! trans("angel/offer.offer") !!} :: @parent @endsection

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            {!! trans("angel/offer.offer") !!}
            <div class="pull-right">
                <div class="pull-right">
                    <a href="{!! url('angel/offer/create') !!}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span> {{
					trans("angel/modal.new") }}</a>
                </div>
            </div>
        </h3>
    </div>

    <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>
            <th>{{ trans("angel/offer.type") }}</th>
            <th>{{ trans("angel/offer.category") }}</th>
            <th>{{ trans("angel/offer.description") }}</th>
            <th>{{ trans("angel/offer.amount") }}</th>
            <th>{{ trans("angel/angel.action") }}</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
@endsection

{{-- Scripts --}}
@section('scripts')
@endsection
