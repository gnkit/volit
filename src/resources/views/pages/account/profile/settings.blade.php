@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="display-6 mb-4">{{ __('Профайлды баптау') }}</h1>
        <div class="row">
            <div class="col-lg-4">

                @include('pages.account.partials.profile_card')

            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <form method="POST" action="#" id="editAccount"
                                  class="needs-validation">
                                <div class="col mb-3">
                                    <label for="fullName" class="form-label">{{ __('Аты Жөні')  }} *</label>
                                    <input name="fullName" type="text" class="form-control" id="fullName"
                                           placeholder="{{ __('тіркелушінің толық аты жөні...') }}"
                                           value="{{ old('fullName') ?? '' }}" required>
                                    <div class="invalid-feedback">
                                        {{ __('Valid fullName is required.') }}
                                    </div>
                                </div>

                                <div class="col mb-3">
                                    <label for="organization" class="form-label">{{ __('Ұйым атауы') }} </label>
                                    <input name="organization" type="text" class="form-control" id="organization"
                                           placeholder="{{ __('ұйымның толық атауы...') }}"
                                           value="{{ old('organization') ?? '' }}">
                                    <div class="invalid-feedback">
                                        {{ __('Valid organization is required.') }}
                                    </div>
                                </div>

                                <div class="col mb-3">
                                    <label for="location" class="form-label">{{ __('Орналасқан жері') }} </label>
                                    <input name="location" type="text" class="form-control" id="location"
                                           placeholder="{{ __('облыс, қала, ауыл...') }} *"
                                           value="{{ old('location') ?? '' }}" required>
                                    <div class="invalid-feedback">
                                        {{ __('Valid location is required.') }}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="text-start">
                                        <a class="btn btn-success" href="{{ route('account') }}">
                                            <i class="bi bi-floppy"></i>
                                            {{ __('Сақтау') }}
                                        </a>
                                        <a class="btn btn-secondary" href="{{ route('account') }}">
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
