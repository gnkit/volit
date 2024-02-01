@extends('layouts.app')

@section('content')

    <div class="container px-0">
        <h1 class="display-6 mb-4">{{ __('Тапсырмалар') }}</h1>
        <div class="row">
            <div class="col-4 bg-secondary-subtle rounded-2 p-4 fw-light">
                <p class="lead">{{ __('Өзіңіз көмектесе алатын саланы таңдауға болады') }}</p>
                <div class="fw-light mb-4">
                    <span><i class="bi bi-tags me-2"></i>{{ __('Санат') }}</span>
                    <hr class="border-secondary my-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Сайт жасау, қолдау
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Графика
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Графика
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Графика
                        </label>
                    </div>
                </div>
                <div class="fw-light mb-4">
                    <span><i class="bi bi-list-task me-2"></i>{{ __('Статус') }}</span>
                    <hr class="border-secondary my-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ашық
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Жасалуда
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Шешілген
                        </label>
                    </div>
                </div>
                <div class="d-grid justify-content-between">
                    <a class="btn btn-secondary text-white me-3" href="#" role="button">{{ ('Қалпына келтіру') }}</a>
                </div>
            </div>
            <div class="col-8">
                <div class="row g-4 flex-wrap">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-dark-emphasis">
                                <div class="fw-bold"><i class="bi bi-person me-2"></i>Аты Жөні</div>
                                <div class="fw-bold mb-2">
                                    <i class="bi bi-house-heart me-2"></i>«Көмектес» Қоғамдық қоры
                                </div>
                                <h5 class="card-title text-dark fw-bold mb-2">
                                    <a class="link-body-emphasis text-decoration-none" href="#">Сайттың дизайнын
                                        жасау</a>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-dark-emphasis">
                                <div class="fw-bold"><i class="bi bi-person me-2"></i>Аты Жөні</div>
                                <div class="fw-bold mb-2">
                                    <i class="bi bi-house-heart me-2"></i>«Көмектес» Қоғамдық қоры
                                </div>
                                <h5 class="card-title text-dark fw-bold mb-2">
                                    <a class="link-body-emphasis text-decoration-none" href="#">Сайттың дизайнын
                                        жасау</a>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-dark-emphasis">
                                <div class="fw-bold"><i class="bi bi-person me-2"></i>Аты Жөні</div>
                                <div class="fw-bold mb-2">
                                    <i class="bi bi-house-heart me-2"></i>«Көмектес» Қоғамдық қоры
                                </div>
                                <h5 class="card-title text-dark fw-bold mb-2">
                                    <a class="link-body-emphasis text-decoration-none" href="#">Сайттың дизайнын
                                        жасау</a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
