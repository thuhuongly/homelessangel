@extends('homeless.layouts.default')
@extends('layouts.app')
{{-- Web site Title --}}
{{-- Web site Title --}}
@section('title') {!! trans("transaction") !!} :: @parent @endsection

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            {!! trans("homeless/transaction.transaction") !!}
            <div class="pull-right">
                <div class="pull-right">
                    <a href="{!! url('homeless/transaction/create') !!}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span> {{
					trans("homeless/modal.new") }}</a>
                </div>
            </div>
        </h3>
    </div>

    <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>
            <th>{{ trans("homeless/transaction.offer") }}</th>
            <th>{{ trans("homeless/transaction.amount") }}</th>
            <th>{{ trans("homeless/transaction.address") }}</th>
            <th>{{ trans("homeless/transaction.datepickup") }}</th>
            <th>{{ trans("homeless/homeless.action") }}</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
@endsection

{{-- Scripts --}}
@section('scripts')
@endsection
