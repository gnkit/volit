@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="display-6 mb-4">{{ __('Менің тапсырмаларым') }}</h1>
        <div class="row">
            <div class="col-lg-4">

                @include('pages.account.partials.profile_card')

            </div>
            <div class="col-lg-8">
                <div class="text-end mb-4">
                    <a class="btn btn-secondary" href="{{ route('tasks.index') }}">
                        <i class="bi bi-list"></i>
                        {{ __('Тапсырмалар') }}
                    </a>
                    <a class="btn btn-success" href="{{ route('tasks.create') }}">
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
