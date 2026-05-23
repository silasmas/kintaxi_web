@extends('layouts.guest', ['page_title' => 'KinTaxi / ' . __('miscellaneous.menu.contact')])

@section('guest-content')

                <div class="row gx-5 my-lg-4 my-5">
                    <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                        <div class="card h-100">
                            <div class="card-header bg-gradient-primary-to-secondary">
                                <h4 class="m-0 text-white">@lang('contact.info.title')</h4>
                            </div>
                            <div class="card-body">
                                <p class="mb-2"><strong>@lang('contact.info.support') :</strong><br>
                                    <a href="mailto:contact@kintaxi.org">contact@kintaxi.org</a>
                                </p>
                                <p class="mb-2"><strong>@lang('contact.info.general') :</strong><br>
                                    <a href="mailto:info@kintaxi.org">info@kintaxi.org</a>
                                </p>
                                <p class="mb-2"><strong>@lang('contact.info.privacy') :</strong><br>
                                    <a href="mailto:privacy@kintaxi.org">privacy@kintaxi.org</a>
                                </p>
                                <p class="mb-2"><strong>@lang('contact.info.dpo') :</strong><br>
                                    <a href="mailto:jptshienda@kintaxi.org">jptshienda@kintaxi.org</a>
                                </p>
                                <p class="mb-0"><strong>@lang('contact.info.address') :</strong><br>
                                    @lang('contact.info.address_value')
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <h1>@lang('contact.title')</h1>
                        <p class="text-muted">@lang('contact.description')</p>

                        @if (session('contact_success'))
                        <div class="alert alert-success" role="alert">
                            @lang('contact.success')
                        </div>
                        @endif

                        <form method="POST" action="{{ route('contact.store') }}" class="mt-4">
                            @csrf

                            <div class="form-floating mb-3">
                                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="@lang('contact.fields.name')" value="{{ old('name') }}" required />
                                <label for="name">@lang('contact.fields.name')</label>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" placeholder="@lang('contact.fields.email')" value="{{ old('email') }}" required />
                                <label for="email">@lang('contact.fields.email')</label>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" type="tel" placeholder="@lang('contact.fields.phone')" value="{{ old('phone') }}" required />
                                <label for="phone">@lang('contact.fields.phone')</label>
                                @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" placeholder="@lang('contact.fields.message')" style="height: 10rem" required>{{ old('message') }}</textarea>
                                <label for="message">@lang('contact.fields.message')</label>
                                @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button class="btn ktx-btn-yellow rounded-pill btn-lg" type="submit">@lang('miscellaneous.send')</button>
                            </div>
                        </form>
                    </div>
                </div>

@endsection
