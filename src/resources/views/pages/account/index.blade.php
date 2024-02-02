@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="display-6 mb-4">{{ __('Профайл') }}</h1>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                             alt="avatar"
                             class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">Фамилия Аты Тегі</h5>
                        <p class="text-muted mb-1">«Көмектес» Қоғамдық қоры</p>
                        <p class="text-muted mb-1">Тапсырыс беруші</p>
                        <p class="text-muted mb-4">Астана қаласы</p>
                        <div class="d-flex justify-content-center flex-wrap mb-2 text-muted">
                            <div class="m-2"><i class="text-warning bi bi-star-fill me-1"></i>4.5/5</div>
                            <div class="m-2"><i class="bi bi-chat-left-text me-1"></i>35 пікір</div>
                            <div class="m-2"><i class="text-success bi bi-hand-thumbs-up-fill me-1"></i>124 рахмет</div>
                            <div class="m-2"><i class="bi bi-ui-checks me-1"></i>25 тапсырма</div>
                            <div class="m-2"><i class="text-success bi bi-trophy-fill me-1"></i>1296 ұпай</div>
                        </div>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route('settings') }}" class="btn btn-secondary">{{ __('Профильді өзгерту') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="text-end mb-4">
                    <a class="btn btn-success" href="#">
                        <i class="bi bi-plus"></i>
                        {{ __('Жаңа тапсырма') }}
                    </a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table align-middle table-hover table-responsive table-striped">
                            <thead class="">
                            <tr>
                                <th>{{ __('#') }}</th>
                                <th>{{ __('Атауы') }}</th>
                                <th>{{ __('Дедлайны') }}</th>
                                <th>{{ __('Статусы') }}</th>
                                <th>{{ __('Қабылдаушылар') }}</th>
                                <th>{{ __('Әрекеттер') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Видео түсіру</td>
                                <td>21.04.2053</td>
                                <td><span class="badge bg-success">жарияланды</span></td>
                                <td>
                                    <div class="d-flex align-items-center mb-1">
                                        <img src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                             alt=""
                                             style="width: 45px; height: 45px"
                                             class="rounded-circle"
                                        />
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">John Doe</p>
                                            <p class="text-muted mb-0">john.doe@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-1">
                                        <img src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                             alt=""
                                             style="width: 45px; height: 45px"
                                             class="rounded-circle"
                                        />
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">John Doe</p>
                                            <p class="text-muted mb-0">john.doe@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <form action="#"
                                          method="POST">
                                        <div class="btn-group">
                                            <a class="btn btn-outline-secondary btn-sm" href="#">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a class="btn btn-success btn-sm" href="#">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Видео түсіру</td>
                                <td>21.04.2053</td>
                                <td><span class="badge bg-success">жарияланды</span></td>
                                <td>
                                    <div class="d-flex align-items-center mb-1">
                                        <img src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                             alt=""
                                             style="width: 45px; height: 45px"
                                             class="rounded-circle"
                                        />
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">John Doe</p>
                                            <p class="text-muted mb-0">john.doe@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-1">
                                        <img src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                             alt=""
                                             style="width: 45px; height: 45px"
                                             class="rounded-circle"
                                        />
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">John Doe</p>
                                            <p class="text-muted mb-0">john.doe@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <form action="#"
                                          method="POST">
                                        <div class="btn-group">
                                            <a class="btn btn-outline-secondary btn-sm" href="#">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a class="btn btn-success btn-sm" href="#">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
