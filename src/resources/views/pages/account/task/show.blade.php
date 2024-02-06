@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="display-6 mb-4">{{ __('Тапсырма #1') }}</h1>
        <div class="row">
            <div class="col-lg-4">

                @include('pages.account.partials.profile_card')

            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <form method="POST" action="#" id="createTask"
                                  class="needs-validation">
                                <div class="col mb-3 border-bottom">
                                    <h2 class="card-title text-dark fw-bold mb-2">
                                        <a class="link-body-emphasis text-decoration-none" href="#">Сайттың дизайнын
                                            жасау</a>
                                    </h2>
                                    <div class="d-flex justify-content-start flex-wrap mb-2">
                                        <div class="me-4"><i class="bi bi-clock me-1"></i>24.03.2024 дейін</div>
                                        <div class="me-4"><i class="bi bi-calendar3 me-1"></i>14.01.2024 ашылды</div>
                                        <div class="me-4"><i class="bi bi-person-plus me-1"></i>2 қабылдау</div>
                                    </div>
                                    <div class="d-flex justify-content-start flex-wrap mb-2">
                                        <div class="me-4"><i class="bi bi-grid me-1"></i>Сайт жасау</div>
                                        <div class="me-4"><i class="bi bi-heart me-1"></i>Жануарларға көмек</div>
                                        <div class="me-4"><i class="bi bi-gift me-1"></i>Фото және видео пікір</div>
                                    </div>
                                </div>

                                <div class="col mb-3 border-bottom">
                                    <h4 class="card-title text-dark mb-2">
                                        {{ __('Тапсырманың мәні') }}
                                    </h4>
                                    <div class="d-flex justify-content-start flex-wrap mb-2">
                                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Aliquam
                                            culpa
                                            cupiditate fuga labore reiciendis. Commodi culpa dicta dolores doloribus eos
                                            est
                                            ex expedita facilis fugiat fugit incidunt magnam minus, nihil numquam, odit
                                            officiis praesentium quam quia quos, unde? A consectetur deleniti dicta
                                            dolor
                                            dolore expedita explicabo hic illum inventore ipsa maxime, minus nemo, odio
                                            placeat quodit omnis pariatur repudiandae tenetur
                                            unde vel voluptate voluptatibus. Corporis?</p>
                                    </div>
                                </div>

                                <div class="col mb-3 border-bottom">
                                    <h4 class="card-title text-dark mb-2">
                                        {{ __('Файлдар') }}
                                    </h4>
                                    <div class="d-flex justify-content-start flex-wrap mb-2">
                                        <a class="me-4 btn btn-light btn-sm rounded-5" href="#">
                                            <i class="bi bi-file-zip me-1"></i>file56ghhhh ghjhgj.zip</a>
                                    </div>
                                </div>

                                <div class="col mb-3 border-bottom">
                                    <h4 class="card-title text-dark mb-2">
                                        {{ __('Қызушылық танытқандар') }}
                                    </h4>
                                    <div class="d-flex justify-content-start flex-wrap mb-2">
                                        <a class="me-4 btn btn-light btn-sm rounded-5" href="#">
                                            <i class="bi bi-person me-1"></i>Аты жөні</a>
                                        <a class="me-4 btn btn-light btn-sm rounded-5" href="#">
                                            <i class="bi bi-person me-1"></i>Аты жөні тегі</a>
                                    </div>
                                </div>

                                <div class="col mb-3 border-bottom">
                                    <h4 class="card-title text-dark mb-2">
                                        {{ __('Тапсырма статусы') }}
                                    </h4>
                                    <div class="d-flex justify-content-start flex-wrap mb-2">
                                        <a class="me-4 btn btn-light btn-sm rounded-5" href="#">
                                            <i class="text-success bi bi-circle-fill me-1"></i>{{ __('Жарияланған') }}</a>
                                        <a class="me-4 btn btn-light btn-sm rounded-5" href="#">
                                            <i class="text-secondary bi bi-circle-fill me-1"></i>{{ __('Жазба') }}</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="text-start">
                                        <a class="btn btn-success" href="{{ route('tasks.store') }}">
                                            <i class="bi bi-floppy"></i>
                                            {{ __('Жариялау') }}
                                        </a>
                                        <a class="btn btn-dark" href="{{ route('tasks.edit', 1) }}">
                                            <i class="bi bi-pencil-square"></i>
                                            {{ __('Жазбаны өңдеу') }}
                                        </a>
                                        <a class="btn btn-secondary" href="{{ route('tasks.index') }}">
                                            <i class="bi bi-x"></i>
                                            {{ __('Бас тарту') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }

            function clearImage() {
                document.getElementById('avatar').value = null;
                frame.src = '';
            }
        </script>

@endsection
