@extends('layouts.app')

@section('subtitle', '| Novo Cadastro')

@section('content')
    <div class="row mt-4 justify-content-around align-items-center">
        <div class="col-8">
            <h4>{{ __('tradutions.new_register') }}</h4>
        </div>
        <div class="col-4 text-right">
            <a href="{{ route('people.index') }}" class="btn btn-outline-primary">
                {{ __('tradutions.come_back') }}
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
                                <label class="form-check-label" for="inlineRadio{{ $nationality->id }}">{{ $nationality->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="name" class="col-form-label">{{ __('tradutions.form.full_name') }}</label>
                        <input type="text" name="name" class="form-control text-uppercase" id="name" required autocomplete="off" />
                    </div>
                    <div class="form-group col-4 cpf" style="display: none;">
                        <label for="cpf" class="col-form-label">{{ __('tradutions.form.document') }}</label>
                        <input type="text" name="cpf" class="form-control" id="cpf" autocomplete="off" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col uf" style="display: none;">
                        <label for="state_id" class="col-form-label">{{ __('tradutions.form.state') }}</label>
                        <select name="state_id" id="state_id" class="form-control">
                            <option value selected disabled>{{ __('tradutions.form.select_the_state') }}</option>
                            @foreach($states as $state)
                                <option value="{{ $state->id }}">{{ $state->uf }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col city" style="display: none;">
                        <label for="city" class="col-form-label">{{ __('tradutions.form.county') }}</label>
                        <input type="text" name="city" class="form-control" id="city" autocomplete="off" list="cities" />
                        <datalist id="cities"></datalist>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="birth" class="col-form-label">{{ __('tradutions.form.birth') }}</label>
                        <input type="text" name="birth" class="form-control" id="birth" required autocomplete="off" />
                    </div>
                    <div class="form-group col">
                        <label for="academic_id" class="col-form-label">{{ __('tradutions.form.academic_level') }}</label>
                        <select name="academic_id" id="academic_id" class="form-control">
                            <option value selected disabled>{{ __('tradutions.form.select_academic_background') }}</option>
                            @foreach($academiclevels as $academiclevel)
                                <option value="{{ $academiclevel->id }}">{{ $academiclevel->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <button type="submit" class="btn btn-outline-success">{{ __('tradutions.form.register') }}</button>
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
