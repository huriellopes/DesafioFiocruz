<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('people.index') }}">{{ config('app.name', 'Desafio Fiocruz') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <x-menu name="{{ __('tradutions.home') }}" :route="route('people.index')"/>
                <x-menu name="{{ __('tradutions.new_register') }}" :route="route('people.create')"/>
            </ul>
        </div>
    </div>
</nav>
