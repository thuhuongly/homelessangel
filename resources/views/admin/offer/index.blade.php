@extends('admin.layouts.default')
@extends('layouts.app')
{{-- Web site Title --}}
{{-- Web site Title --}}
@section('title') {!! trans("admin/offer.offer") !!} :: @parent @endsection

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            {!! trans("admin/offer.offer") !!}
            <div class="pull-right">
                <div class="pull-right">
                    <a href="{!! url('admin/offer/create') !!}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span> {{
					trans("admin/modal.new") }}</a>
                </div>
            </div>
        </h3>
    </div>

    <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>
            <th>{{ trans("admin/offer.type") }}</th>
            <th>{{ trans("admin/offer.category") }}</th>
            <th>{{ trans("admin/offer.description") }}</th>
            <th>{{ trans("admin/offer.amount") }}</th>
            <th>{{ trans("admin/admin.action") }}</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
@endsection

{{-- Scripts --}}
@section('scripts')
@endsection
