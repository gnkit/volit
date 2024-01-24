@extends('layouts.app')

@section('content')

    @include('partials.intro')

    <div class="container py-4">
        <h1 class="display-5 text-center mb-4">{{ ('Open Tasks') }}</h1>
        <div class="row">
            <div class="col-6">
                <div class="card mb-3">
                    <div class="card-body text-dark-emphasis">
                        <div class="py-2"><i class="fa-regular fa-circle-user me-2"></i>Lorem ipsum dolor sit amet.</div>
                        <h5 class="card-title text-dark">Primary card title</h5>
                        <div class="mb-2 text-danger"><i class="fa-regular fa-clock me-2"></i>Lorem ipsum dolor sit.</div>
                        <div class="mb-2"><i class="fa-brands fa-gratipay me-2"></i>Lorem ipsum dolor sit.</div>
                        <div class="mb-2"><i class="fa-solid fa-gift me-2"></i>Lorem ipsum dolor sit.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.call')

@endsection
