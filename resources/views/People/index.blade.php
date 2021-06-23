@extends('layouts.app')

@section('subtitle', '| Inicio')

@section('content')
    <div class="row mt-4 justify-content-around align-items-center">
        <div class="col-8">
            <h4>
                {{ __('tradutions.listing') }}
            </h4>
        </div>
        <div class="col-4 text-right">
            <a href="{{ route('people.create') }}" class="btn btn-outline-primary">
                {{ __('tradutions.new_register') }}
            </a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <table class="table table-hover table-striped datatables" id="peopleTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ __('tradutions.table.name') }}</th>
                        <th>{{ __('tradutions.table.document') }}</th>
                        <th>{{ __('tradutions.table.state') }}</th>
                        <th>{{ __('tradutions.table.county') }}</th>
                        <th>{{ __('tradutions.table.birth') }}</th>
                        <th>{{ __('tradutions.table.formation') }}</th>
                        <th>{{ __('tradutions.table.date') }}</th>
                        <th>{{ __('tradutions.table.action') }}</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    <x-modal idModal="peopleshow" />
@stop

@section('js')
    <script src="{{ asset('/assets/js/people/people.index.js') }}"></script>
@stop
