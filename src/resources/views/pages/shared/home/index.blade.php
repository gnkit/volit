@extends('layouts.app')

@section('content')

    @include('partials.intro')

    <div class="container pb-4">
        <h2 class="display-6 text-center mb-4">{{ __('Тапсырмалар') }}</h2>
        <div class="row g-4 flex-wrap">
            @foreach($tasks as $task)
                <div class="col-md-12 col-lg-6">
                    <div class="card">
                        <div class="card-body text-muted">
                            <div class=""><i class="bi bi-person me-1"></i>{{ $task->account->fullname ?? '' }}</div>
                            <div class="mb-2">
                                <i class="bi bi-house-heart me-1"></i>{{ $task->account->organization ?? '' }}
                            </div>
                            <h5 class="card-title text-dark fw-bold mb-2">
                                <a class="link-body-emphasis text-decoration-none" href="#">{{ $task->title ?? '' }}</a>
                            </h5>
                            <div class="d-flex justify-content-start flex-wrap mb-2">
                                <div class="me-4 mb-2"><i
                                        class="bi bi-clock me-1"></i>{{ date('d-m-Y', strtotime($task->finish_date)) ?? '' }}
                                    дейін
                                </div>
                                <div class="me-4 mb-2"><i
                                        class="bi bi-calendar3 me-1"></i>{{ date('d-m-Y', strtotime($task->start_date)) ?? '' }}
                                    ашылды
                                </div>
                                <div class="me-4 mb-2"><i class="bi bi-person-plus me-1"></i>{{ count($task->follows) }} қабылдау</div>
                                <div class="me-4 mb-2"><i class="bi bi-grid me-1"></i>{{ $task->category->name ?? '' }}</div>
                                <div class="me-4 mb-2"><i class="bi bi-heart me-1"></i>{{ $task->categoryHelp->name ?? '' }}
                                </div>
                                <div class="me-4 mb-2"><i class="bi bi-gift me-1"></i>
                                    @foreach($task->bonuses as $bonus)
                                        {{ $bonus->name ?? '' }}
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-success text-white me-3" href="#" role="button">{{ ('Қабылдау') }}</a>
                                <a class="btn btn-secondary text-white me-3" href="#"
                                   role="button">{{ ('Бас тарту') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('partials.call')

@endsection
