@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="display-6 mb-4">{{ __('Профайл') }}</h1>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <div class="position-relative">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                 alt="avatar"
                                 class="rounded-circle img-fluid" style="width: 150px;">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="position-absolute border rounded-circle px-2 py-1 bg-light text-secondary bi bi-camera-fill"
                                   style="left: 55%; top:81%;"></i>
                            </button>
                        </div>

                        <!-- Modal -->
                        <form action="#" method="POST" name="uploadAvatar">
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fs-5"
                                                id="exampleModalLabel">{{ __('Аватарды жүктеу') }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col">
                                                <label for="avatar" class="form-label">{{ __('Аватар') }} </label>
                                                <input name="avatar" accept="image/*" type="file" class="form-control"
                                                       id="avatar"
                                                       placeholder="{{ __('2Мб аспау керек...') }}"
                                                       onchange="preview()"
                                                       value="{{ old('avatar') ?? '' }}" required>
                                                <div class="invalid-feedback">
                                                    {{ __('Valid avatar is required.') }}
                                                </div>
                                                <img id="frame" src="" class="rounded-circle my-4"
                                                     style="width: 150px; height: 150px;">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">{{ __('Жабу') }}
                                            </button>
                                            <button onclick="clearImage()"
                                                    class="btn btn-danger">{{ __('Аватарды өшіру') }}</button>
                                            <button type="button" class="btn btn-success">{{ __('Сақтау') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

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
                            <a href="{{ route('settings') }}"
                               class="btn btn-secondary">{{ __('Профильді өзгерту') }}</a>
                        </div>
                    </div>
                </div>
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
                                    <div class="col">
                                        <button class="btn btn-success"
                                                type="submit">{{ __('Сақтау') }}</button>
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
