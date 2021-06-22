@extends('layouts.app')

@section('subtitle', '| Inicio')

@section('css')
@stop

@section('content')
    <div class="row mt-4 justify-content-around align-items-center">
        <div class="col-8">
            <h4>Listagem</h4>
        </div>
        <div class="col-4 text-right">
            <a href="{{ route('people.create') }}" class="btn btn-outline-primary">
                Novo Cadastro
            </a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <table class="table table-hover table-striped .datatables" id="peopleTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>UF</th>
                        <th>Munícipio</th>
                        <th>Nascimento</th>
                        <th>Formação</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('/assets/js/people/people.index.js') }}"></script>
@stop
