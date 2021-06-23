<div class="container">
    <div class="row">
        <div class="col">
            <p>
                <strong>{{ __('tradutions.show.nationality') }}: </strong> {{ $people->present()->nationality }}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>
                <strong class="text-uppercase">{{ __('tradutions.show.full_name') }}: </strong> {{ $people->present()->formatData['fullName'] }}
            </p>
        </div>
        <div class="col">
            <p>
                <strong class="text-uppercase">{{ __('tradutions.show.age') }}: </strong> {{ $people->present()->formatData['age'] }} Anos
            </p>
        </div>
    </div>

    <div class="row">
        @if ($people->cpf)
            <div class="col">
                <p>
                    <strong>{{ __('tradutions.show.document') }}: </strong> {{ $people->present()->formatData['cpf'] }}
                </p>
            </div>
        @endif
        <div class="col">
            <p>
                <strong>{{ __('tradutions.show.academic_formation') }}: </strong> {{ $people->present()->formatData['academic_level'] }}
            </p>
        </div>
    </div>
    @if ($people->state_id && $people->city)
        <div class="row">
            <div class="col">
                <p>
                    <strong>{{ __('tradutions.show.state') }}: </strong> {{ $people->present()->formatData['uf'] }}
                </p>
            </div>
            <div class="col">
                <p>
                    <strong>{{ __('tradutions.show.city') }}: </strong> {{ $people->present()->formatData['city'] }}
                </p>
            </div>
        </div>
    @endif
</div>
