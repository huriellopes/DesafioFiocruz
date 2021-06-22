@extends('layouts.app')

@section('subtitle', '| Novo Cadastro')

@section('css')
@stop

@section('content')
    <div class="row mt-4 justify-content-around align-items-center">
        <div class="col-8">
            <h4>Novo Cadastro</h4>
        </div>
        <div class="col-4 text-left">
            <a href="{{ route('people.index') }}" class="btn btn-outline-primary">
                Voltar
            </a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <form action="{{ route('people_api.store') }}" method="POST" name="cadastro" autocomplete="off">
                @csrf
                <div class="form-row">
                    <div class="form-group col text-center">
                        @foreach($nationalities as $nationality)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="nationality_id" id="inlineRadio{{ $nationality->id }}" value="{{ $nationality->id }}" {{ $nationality->id == 1 ? 'checked' : '' }} />
                                <label class="form-check-label" for="inlineRadio{{ $nationality->id }}">{{ $nationality->description }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="name" class="col-form-label">Nome Completo</label>
                        <input type="text" name="name" class="form-control text-uppercase" id="name" required autocomplete="off" />
                    </div>
                    <div class="form-group col-4 cpf" style="display: none;">
                        <label for="cpf" class="col-form-label">CPF</label>
                        <input type="text" name="cpf" class="form-control" id="cpf" autocomplete="off" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col uf" style="display: none;">
                        <label for="state_id" class="col-form-label">UF</label>
                        <select name="state_id" id="state_id" class="form-control">
                            <option value selected disabled>Selecione a UF</option>
                            @foreach($states as $state)
                                <option value="{{ $state->id }}">{{ $state->uf }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col city" style="display: none;">
                        <label for="city" class="col-form-label">Município</label>
                        <input type="text" name="city" class="form-control" id="city" autocomplete="off" list="cities" />
                        <datalist id="cities"></datalist>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="birth" class="col-form-label">Data de Nascimento</label>
                        <input type="text" name="birth" class="form-control" id="birth" required autocomplete="off" />
                    </div>
                    <div class="form-group col">
                        <label for="academic_id" class="col-form-label">Nível Acadêmico</label>
                        <select name="academic_id" id="academic_id" class="form-control">
                            <option value selected disabled>Selecione a formação acadêmica</option>
                            @foreach($academiclevels as $academiclevel)
                                <option value="{{ $academiclevel->id }}">{{ $academiclevel->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('/assets/js/people/people.script.js') }}"></script>
    <script src="{{ asset('/assets/js/people/people.js') }}"></script>
@stop
