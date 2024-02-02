@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="display-6 mb-4">{{ __('Волонтерлар') }}</h1>
        <div class="row">
            <div class="col-md-12 col-lg-4 rounded-2 p-4 fw-light">
                <p class="lead">{{ __('Волонтерлардың рейтингтерін көруге болады') }}</p>
                <div class="fw-light mb-4">
                    <span><i class="bi bi-filter me-2"></i>{{ __('Сұрыптау') }}</span>
                    <select class="form-select my-2" aria-label="Default select example">
                        <option selected>{{ __('Таңдау') }}</option>
                        <option value="2">{{ __('Өсуі бойынша') }}</option>
                        <option value="1">{{ __('Азаюы бойынша') }}</option>
                    </select>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Рейтинг ұпайы
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Пікірлер саны
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Шешілген тапсырмалар
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Барлық ұпайы
                        </label>
                    </div>
                </div>
                <div class="d-grid justify-content-between">
                    <a class="btn btn-secondary text-white me-3" href="#" role="button">{{ ('Қалпына келтіру') }}</a>
                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="row g-4 flex-wrap">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-dark-emphasis">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" style="max-width: 100px;"
                                             alt="Avatar" />
                                    </div>
                                    <div class="col-md-12 col-lg-9">
                                        <h5 class="card-title text-dark fw-bold mb-2">
                                            <a class="link-body-emphasis text-decoration-none" href="#">Фамилия Аты Тегі</a>
                                        </h5>
                                        <div class="d-flex justify-content-between flex-wrap mb-1">
                                            <div class=""><i class="text-warning bi bi-star-fill me-1"></i>4.5/5</div>
                                            <div class=""><i class="bi bi-chat-left-text me-1"></i>35 пікір</div>
                                            <div class=""><i class="text-success bi bi-hand-thumbs-up-fill me-1"></i>124 рахмет</div>
                                            <div class=""><i class="bi bi-ui-checks me-1"></i>25 тапсырма</div>
                                            <div class=""><i class="text-success bi bi-trophy-fill me-1"></i>1296 ұпай</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
