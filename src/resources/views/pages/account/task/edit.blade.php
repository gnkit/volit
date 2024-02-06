@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="display-6 mb-4">{{ __('Тапсырманы өңдеу') }}</h1>
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
                                <div class="col mb-3">
                                    <label for="fullName" class="form-label">{{ __('Атауы')  }} *</label>
                                    <input name="fullName" type="text" class="form-control" id="fullName"
                                           placeholder="{{ __('тапсырманың атауы...') }}"
                                           value="{{ old('fullName') ?? '' }}" required>
                                    <div class="invalid-feedback">
                                        {{ __('Valid fullName is required.') }}
                                    </div>
                                </div>

                                <div class="col mb-3">
                                    <label for="description" class="form-label">{{ __('Сипаттамасы') }} *</label>
                                    <textarea class="form-control" id="description" name="description" type="textarea"
                                              placeholder="тапсырманың сипаттамасы, мейлінше түсінікті..."
                                              rows="3">{{ old('description') ?? '' }}</textarea>
                                    <div class="invalid-feedback">
                                        {{ __('Valid description is required.') }}
                                    </div>
                                </div>

                                <div class="col mb-3">
                                    <label for="category" class="form-label">{{ __('Категориясы') }} *</label>
                                    <select name="category" class="form-select" id="category" required>
                                        <option value="0">{{ __('Көмек категориясын таңдаңыз...') }}</option>
                                        <option value="1">Сайт құру</option>
                                        <option value="1">Видео өңдеу</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        {{ __('Please category a valid status.') }}
                                    </div>
                                </div>

                                <div class="col mb-3">
                                    <label for="help" class="form-label">{{ __('Бағыты') }}*</label>
                                    <select name="help" class="form-select" id="help" required>
                                        <option value="0">{{ __('Көмек бағытын таңдаңыз...') }}</option>
                                        <option value="1">Үй жануарлары</option>
                                        <option value="1">Экология</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        {{ __('Please help a valid status.') }}
                                    </div>
                                </div>

                                <div class="col mb-3">
                                    <label for="reward" class="form-label">{{ __('Сыйақы') }}</label>
                                    <select name="reward" class="form-select" id="reward" required>
                                        <option value="0">{{ __('Сыйақы түрін таңдаңыз...') }}</option>
                                        <option value="1">Пікір</option>
                                        <option value="1">Кәде сый</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        {{ __('Please reward a valid status.') }}
                                    </div>
                                </div>

                                <div class="col mb-3">
                                    <label for="deadline" class="form-label">{{ __('Дедлайн (Таңдалмаған жағдайда, автоматты түрде қойылады)')  }} </label>
                                    <input name="deadline" type="date" class="form-control" id="deadline"
                                           placeholder="{{ __('тапсырманың атауы...') }}"
                                           value="{{ old('deadline') ?? '' }}" required pattern="\d{4}-\d{2}-\d{2}">
                                    <div class="invalid-feedback">
                                        {{ __('Valid deadline is required.') }}
                                    </div>
                                </div>

                                <div class="col mb-3">
                                    <label for="file" class="form-label">{{ __('Файлдарды жүктеу (10Мб аспайтын)')  }} </label>
                                    <input name="file" type="file" class="form-control" id="file" placeholder="dfg"
                                           value="{{ old('file') ?? '' }}">
                                    <div class="invalid-feedback">
                                        {{ __('Valid file is required.') }}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="text-start">
                                        <a class="btn btn-success" href="{{ route('tasks.store') }}">
                                            <i class="bi bi-floppy"></i>
                                            {{ __('Жариялау') }}
                                        </a>
                                        <a class="btn btn-dark" href="{{ route('tasks.store') }}">
                                            <i class="bi bi-floppy2-fill"></i>
                                            {{ __('Жазбаны жаңарту') }}
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
