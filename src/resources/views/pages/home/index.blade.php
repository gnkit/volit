@extends('layouts.app')

@section('content')

    @include('partials.intro')

    <div class="container py-4">
        <h2 class="display-6 text-center mb-4">{{ __('Тапсырмалар') }}</h2>
        <div class="row g-4 flex-wrap">
            <div class="col-md-12 col-lg-6">
                <div class="card" style="font-size: smaller">
                    <div class="card-body text-dark-emphasis">
                        <div class="fw-bold"><i class="bi bi-person me-2"></i>Аты Жөні</div>
                        <div class="fw-bold mb-2">
                            <i class="bi bi-house-heart me-2"></i>«Көмектес» Қоғамдық қоры
                        </div>
                        <h5 class="card-title text-dark fw-bold mb-2">
                            <a class="link-body-emphasis text-decoration-none" href="#">Сайттың дизайнын жасау</a>
                        </h5>
                        <div class="d-flex justify-content-between flex-wrap mb-2">
                            <div class="text-danger"><i class="bi bi-clock me-2"></i>24.03.2024 дейін</div>
                            <div class=""><i class="bi bi-calendar3 me-2"></i>14.01.2024 ашылды</div>
                            <div class=""><i class="bi bi-patch-check me-2"></i>2 қабылдау</div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap mb-2">
                            <div class="fw-light"><i class="bi bi-tags me-2"></i>Сайт жасау</div>
                            <div class="fw-light"><i class="bi bi-heart me-2"></i>Жануарларға көмек</div>
                            <div class="fw-light"><i class="bi bi-gift me-2"></i>Фото және видео пікір</div>
                        </div>
                        <div class="d-grid justify-content-between">
                            <a class="btn btn-success text-white me-3" href="#" role="button">{{ ('Қабылдау') }}</a>
                            <a class="btn btn-secondary text-white me-3" href="#" role="button">{{ ('Бас тарту') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card" style="font-size: smaller">
                    <div class="card-body text-dark-emphasis">
                        <div class="fw-bold"><i class="bi bi-person me-2"></i>Аты Жөні</div>
                        <div class="fw-bold mb-2">
                            <i class="bi bi-house-heart me-2"></i>«Көмектес» Қоғамдық қоры
                        </div>
                        <h5 class="card-title text-dark fw-bold mb-2">
                            <a class="link-body-emphasis text-decoration-none" href="#">Сайттың дизайнын жасау</a>
                        </h5>
                        <div class="d-flex justify-content-between flex-wrap mb-2">
                            <div class="text-danger"><i class="bi bi-clock me-2"></i>24.03.2024 дейін</div>
                            <div class=""><i class="bi bi-calendar3 me-2"></i>14.01.2024 ашылды</div>
                            <div class=""><i class="bi bi-patch-check me-2"></i>2 қабылдау</div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap mb-2">
                            <div class="fw-light"><i class="bi bi-tags me-2"></i>Сайт жасау</div>
                            <div class="fw-light"><i class="bi bi-heart me-2"></i>Жануарларға көмек</div>
                            <div class="fw-light"><i class="bi bi-gift me-2"></i>Фото және видео пікір</div>
                        </div>
                        <div class="d-grid justify-content-between">
                            <a class="btn btn-success text-white me-3" href="#" role="button">{{ ('Қабылдау') }}</a>
                            <a class="btn btn-secondary text-white me-3" href="#" role="button">{{ ('Бас тарту') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card" style="font-size: smaller">
                    <div class="card-body text-dark-emphasis">
                        <div class="fw-bold"><i class="bi bi-person me-2"></i>Аты Жөні</div>
                        <div class="fw-bold mb-2">
                            <i class="bi bi-house-heart me-2"></i>«Көмектес» Қоғамдық қоры
                        </div>
                        <h5 class="card-title text-dark fw-bold mb-2">
                            <a class="link-body-emphasis text-decoration-none" href="#">Сайттың дизайнын жасау</a>
                        </h5>
                        <div class="d-flex justify-content-between flex-wrap mb-2">
                            <div class="text-danger"><i class="bi bi-clock me-2"></i>24.03.2024 дейін</div>
                            <div class=""><i class="bi bi-calendar3 me-2"></i>14.01.2024 ашылды</div>
                            <div class=""><i class="bi bi-patch-check me-2"></i>2 қабылдау</div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap mb-2">
                            <div class="fw-light"><i class="bi bi-tags me-2"></i>Сайт жасау</div>
                            <div class="fw-light"><i class="bi bi-heart me-2"></i>Жануарларға көмек</div>
                            <div class="fw-light"><i class="bi bi-gift me-2"></i>Фото және видео пікір</div>
                        </div>
                        <div class="d-grid justify-content-between">
                            <a class="btn btn-success text-white me-3" href="#" role="button">{{ ('Қабылдау') }}</a>
                            <a class="btn btn-secondary text-white me-3" href="#" role="button">{{ ('Бас тарту') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card" style="font-size: smaller">
                    <div class="card-body text-dark-emphasis">
                        <div class="fw-bold"><i class="bi bi-person me-2"></i>Аты Жөні</div>
                        <div class="fw-bold mb-2">
                            <i class="bi bi-house-heart me-2"></i>«Көмектес» Қоғамдық қоры
                        </div>
                        <h5 class="card-title text-dark fw-bold mb-2">
                            <a class="link-body-emphasis text-decoration-none" href="#">Сайттың дизайнын жасау</a>
                        </h5>
                        <div class="d-flex justify-content-between flex-wrap mb-2">
                            <div class="text-danger"><i class="bi bi-clock me-2"></i>24.03.2024 дейін</div>
                            <div class=""><i class="bi bi-calendar3 me-2"></i>14.01.2024 ашылды</div>
                            <div class=""><i class="bi bi-patch-check me-2"></i>2 қабылдау</div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap mb-2">
                            <div class="fw-light"><i class="bi bi-tags me-2"></i>Сайт жасау</div>
                            <div class="fw-light"><i class="bi bi-heart me-2"></i>Жануарларға көмек</div>
                            <div class="fw-light"><i class="bi bi-gift me-2"></i>Фото және видео пікір</div>
                        </div>
                        <div class="d-grid justify-content-between">
                            <a class="btn btn-success text-white me-3" href="#" role="button">{{ ('Қабылдау') }}</a>
                            <a class="btn btn-secondary text-white me-3" href="#" role="button">{{ ('Бас тарту') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card" style="font-size: smaller">
                    <div class="card-body text-dark-emphasis">
                        <div class="fw-bold"><i class="bi bi-person me-2"></i>Аты Жөні</div>
                        <div class="fw-bold mb-2">
                            <i class="bi bi-house-heart me-2"></i>«Көмектес» Қоғамдық қоры
                        </div>
                        <h5 class="card-title text-dark fw-bold mb-2">
                            <a class="link-body-emphasis text-decoration-none" href="#">Сайттың дизайнын жасау</a>
                        </h5>
                        <div class="d-flex justify-content-between flex-wrap mb-2">
                            <div class="text-danger"><i class="bi bi-clock me-2"></i>24.03.2024 дейін</div>
                            <div class=""><i class="bi bi-calendar3 me-2"></i>14.01.2024 ашылды</div>
                            <div class=""><i class="bi bi-patch-check me-2"></i>2 қабылдау</div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap mb-2">
                            <div class="fw-light"><i class="bi bi-tags me-2"></i>Сайт жасау</div>
                            <div class="fw-light"><i class="bi bi-heart me-2"></i>Жануарларға көмек</div>
                            <div class="fw-light"><i class="bi bi-gift me-2"></i>Фото және видео пікір</div>
                        </div>
                        <div class="d-grid justify-content-between">
                            <a class="btn btn-success text-white me-3" href="#" role="button">{{ ('Қабылдау') }}</a>
                            <a class="btn btn-secondary text-white me-3" href="#" role="button">{{ ('Бас тарту') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.call')

@endsection
