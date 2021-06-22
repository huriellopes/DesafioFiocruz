@extends('layouts.app')

@section('subtitle', '| Inicio')

@section('css')
@stop

@section('content')
    <div class="row mt-4 justify-content-around align-items-center">
        <div class="col-8">
            <h4>Listagem</h4>
        </div>
        <div class="col-4 text-left">
            <a href="{{ route('people.create') }}" class="btn btn-outline-primary">
                Novo Cadastro
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col"></div>
    </div>
@stop

@section('js')
@stop
