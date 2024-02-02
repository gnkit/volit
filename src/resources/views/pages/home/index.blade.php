@extends('layouts.app')

@section('content')

    @include('partials.intro')

    <div class="container pb-4">
        <h2 class="display-6 text-center mb-4">{{ __('Тапсырмалар') }}</h2>
        <div class="row g-4 flex-wrap">
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-body text-muted">
                        <div class=""><i class="bi bi-person me-1"></i>Аты Жөні</div>
                        <div class="mb-2">
                            <i class="bi bi-house-heart me-1"></i>«Көмектес» Қоғамдық қоры
                        </div>
                        <h5 class="card-title text-dark fw-bold mb-2">
                            <a class="link-body-emphasis text-decoration-none" href="#">Сайттың дизайнын
                                жасау</a>
                        </h5>
                        <div class="d-flex justify-content-between flex-wrap mb-2">
                            <div class=""><i class="bi bi-clock me-1"></i>24.03.2024 дейін</div>
                            <div class=""><i class="bi bi-calendar3 me-1"></i>14.01.2024 ашылды</div>
                            <div class=""><i class="bi bi-person-plus me-1"></i>2 қабылдау</div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap mb-2">
                            <div class=""><i class="bi bi-grid me-1"></i>Сайт жасау</div>
                            <div class=""><i class="bi bi-heart me-1"></i>Жануарларға көмек</div>
                            <div class=""><i class="bi bi-gift me-1"></i>Фото және видео пікір</div>
                        </div>
                        <div class="d-flex">
                            <a class="btn btn-success text-white me-3" href="#" role="button">{{ ('Қабылдау') }}</a>
                            <a class="btn btn-secondary text-white me-3" href="#"
                               role="button">{{ ('Бас тарту') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.call')

@endsection
