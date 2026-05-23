<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Conditions d’utilisation KinTaxi" />
        <meta name="author" content="KinTaxi" />

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <link href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&display=swap" />

        <link rel="stylesheet" href="{{ asset('templates/public/css/styles.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

        <style>
            #tableOfContent ul li { list-style-type: decimal; margin-top: 5px; }
            #langToggle { position: absolute; top: 15px; right: 5px; }

            @media (max-width: 991px) {
                #langToggle { right: 15px; }
            }
        </style>

        <title>{{ $page_title ?? 'KinTaxi' }}</title>
    </head>

    <body id="page-top">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5 position-relative">
                <a class="navbar-brand fw-bold" href="/">
                    <img src="{{ asset('assets/img/logo-text.png') }}" alt="KinTaxi" width="200px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                    Menu <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="/">@lang('miscellaneous.menu.home')</a></li>
@if (Route::is('contact'))
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('about') }}">@lang('miscellaneous.menu.about')</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('about', ['entity' => 'terms']) }}">@lang('miscellaneous.menu.terms_of_use')</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('about', ['entity' => 'privacy']) }}">@lang('miscellaneous.menu.privacy_policy')</a></li>
@elseif (Route::is('about') && isset($entity) && $entity != 'about')
    @if ($entity == 'terms')
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('about') }}">@lang('miscellaneous.menu.about')</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('about', ['entity' => 'privacy']) }}">@lang('miscellaneous.menu.privacy_policy')</a></li>
    @endif

    @if ($entity == 'privacy')
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('about') }}">@lang('miscellaneous.menu.about')</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('about', ['entity' => 'terms']) }}">@lang('miscellaneous.menu.terms_of_use')</a></li>
    @endif

    @if ($entity == 'faq')
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('about') }}">@lang('miscellaneous.menu.about')</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('about', ['entity' => 'terms']) }}">@lang('miscellaneous.menu.terms_of_use')</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('about', ['entity' => 'privacy']) }}">@lang('miscellaneous.menu.privacy_policy')</a></li>
    @endif
@else
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('about') }}">@lang('miscellaneous.menu.about')</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('about', ['entity' => 'terms']) }}">@lang('miscellaneous.menu.terms_of_use')</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('about', ['entity' => 'privacy']) }}">@lang('miscellaneous.menu.privacy_policy')</a></li>
@endif
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('contact') }}">@lang('miscellaneous.menu.contact')</a></li>
                    </ul>
                </div>

@php
    $countryCode = null;

    switch ($current_locale) {
        case 'en':
            $countryCode = 'us';
            break;

        case 'ln':
            $countryCode = 'cd';
            break;

        default:
            $countryCode = $current_locale;
            break;
    }
@endphp
                <div id="langToggle" class="dropdown">
                    <button class="btn btn-link dropdown-toggle text-decoration-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="fi fi-{{ $countryCode }}"></span>
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">
@forelse ($available_locales as $locale_name => $available_locale)
    @php
        switch ($available_locale) {
            case 'en':
                $countryCode = 'us';
                break;

            case 'ln':
                $countryCode = 'cd';
                break;

            default:
                $countryCode = $available_locale;
                break;
        };
    @endphp
                        <li>
    @if ($current_locale == $available_locale)
                            <span class="dropdown-item active">
                                <span class="fi fi-{{ $countryCode }}"></span> {{ $locale_name }}
                            </span>
    @else
                            <a class="dropdown-item" href="{{ route('change_language', ['locale' => $available_locale]) }}">
                                <span class="fi fi-{{ $countryCode }}"></span> {{ $locale_name }}
                            </a>
    @endif
                        </li>
@empty
@endforelse
                    </ul>
                </div>
            </div>
        </nav>

        <main class="masthead" style="padding-top: 7rem;">
            <div class="container px-lg-5 px-4">
@yield('guest-content')
            </div>
        </main>

        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; {{ date('Y') }} KinTaxi. Tous droits réservés.</div>
                    <a href="{{ route('about', ['entity' => 'privacy']) }}">Politique de confidentialité</a>
                    <span class="mx-1">&middot;</span>
                    <a href="{{ route('about', ['entity' => 'terms']) }}">Conditions d'utilisation</a>
                    <span class="mx-1">&middot;</span>
                    <a href="{{ route('about', ['entity' => 'faq']) }}">FAQ</a>
                    <span class="mx-1">&middot;</span>
                    <a href="{{ route('contact') }}">@lang('miscellaneous.menu.contact')</a>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
