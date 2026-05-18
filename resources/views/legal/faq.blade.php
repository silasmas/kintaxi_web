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
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&display=swap" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&display=swap" />

        <link rel="stylesheet" href="{{ asset('templates/public/css/styles.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

        <title>Conditions d’utilisation | KinTaxi</title>
    </head>

    <body id="page-top">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="/">
                    <img src="{{ asset('assets/img/logo-text.png') }}" alt="KinTaxi" width="200px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                    Menu <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="/">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('privacy') }}">Confidentialité</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead" style="padding-top: 7rem;">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-10 mx-auto my-5">
                        <h1 class="display-5 lh-1 mb-3">FAQ (Foire aux Questions)</h1>

                        <div class="bg-white rounded-4 shadow-sm p-4 p-lg-5" style="min-height: 50rem;">

                        </div>
                    </div>
                </div>
            </div>
        </header>

        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; {{ date('Y') }} KinTaxi. Tous droits réservés.</div>
                    <a href="{{ route('privacy') }}">Politique de confidentialité</a>
                    <span class="mx-1">&middot;</span>
                    <a href="{{ route('terms') }}">Conditions d'utilisation</a>
                    <span class="mx-1">&middot;</span>
                    <a href="{{ route('faq') }}">FAQ</a>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
