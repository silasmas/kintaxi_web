<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Politique de confidentialité KinTaxi" />
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

        <title>Politique de confidentialité | KinTaxi</title>
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
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('terms') }}">Conditions</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead" style="padding-top: 7rem;">
            <div class="container px-5">
                <div class="row gx-5">
                    <div class="col-lg-10 mx-auto my-5">
                        <h1 class="display-5 lh-1 mb-3">Politique de confidentialité</h1>
                        <p class="text-muted mb-4">
                            Dernière mise à jour : <strong>16 décembre 2025</strong>
                        </p>

                        <div class="bg-white rounded-4 shadow-sm p-4 p-lg-5" style="min-height: 50rem;">

                            <h4>1. Qui sommes-nous ?</h4>
                            <p>
                                KinTaxi (“nous”) exploite une plateforme de transport (courses) et de location de véhicules,
                                incluant des paiements en ligne et un système d’appel intégré pour réduire le partage des
                                informations personnelles.
                            </p>

                            <h4>2. Données que nous collectons</h4>
                            <ul>
                                <li><strong>Données de compte</strong> : nom, téléphone, email (si fourni), mot de passe
                                    (haché).</li>
                                <li><strong>Données de trajet/location</strong> : points de départ/arrivée, itinéraires,
                                    horaires, durée, historique.</li>
                                <li><strong>Localisation</strong> (si autorisée) : pour trouver un véhicule proche, calculer
                                    le trajet et améliorer le service.</li>
                                <li><strong>Paiement</strong> : statut de paiement, références de transaction; les données
                                    sensibles (ex. carte) sont généralement traitées par des prestataires.</li>
                                <li><strong>Support</strong> : messages, appels au support, réclamations, pièces
                                    justificatives si nécessaires.</li>
                                <li><strong>Données techniques</strong> : appareil, logs, IP, identifiants, cookies (pour le
                                    site).</li>
                            </ul>

                            <h4>3. Pourquoi nous utilisons vos données (finalités)</h4>
                            <ul>
                                <li>Créer et gérer votre compte.</li>
                                <li>Fournir les services (course/location), calculer prix, gérer réservations.</li>
                                <li>Traiter les paiements et prévenir la fraude.</li>
                                <li>Permettre l’<strong>appel intégré</strong> (masquage/relay) pour protéger les contacts
                                    personnels.</li>
                                <li>Assistance, gestion des incidents, sécurité.</li>
                                <li>Amélioration de l’application (qualité, performance, statistiques).</li>
                                <li>Obligations légales (comptabilité, demandes des autorités si requis).</li>
                            </ul>

                            <h4>4. Base de traitement</h4>
                            <p>
                                Nous traitons vos données principalement pour exécuter le service que vous demandez
                                (contrat),
                                respecter nos obligations légales, et pour notre intérêt légitime (sécurité, anti-fraude,
                                amélioration),
                                et/ou sur la base de votre consentement (ex : localisation, notifications) lorsque
                                nécessaire.
                            </p>

                            <h4>5. Partage des données</h4>
                            <p>Nous pouvons partager des données limitées avec :</p>
                            <ul>
                                <li><strong>Chauffeurs/Partenaires</strong> : informations nécessaires à la course/location
                                    (ex : point de prise en charge, prénom/alias, note), sans exposer inutilement vos
                                    contacts.</li>
                                <li><strong>Prestataires de paiement</strong> : pour exécuter les transactions.</li>
                                <li><strong>Prestataires techniques</strong> (hébergement, SMS, email, analytics, support).
                                </li>
                                <li><strong>Services de téléphonie/relay</strong> : si l’appel in-app utilise un mécanisme
                                    de numéro relais ou identifiant temporaire.</li>
                                <li><strong>Autorités</strong> : uniquement si requis par la loi ou pour protéger les
                                    droits/sécurité.</li>
                            </ul>

                            <h4>6. Appels in-app et masquage</h4>
                            <p>
                                Pour éviter le partage direct des numéros, KinTaxi peut utiliser des mécanismes techniques
                                (identifiants temporaires,
                                relais d’appel, anonymisation). Selon les cas, des métadonnées (heure, durée, statut)
                                peuvent être enregistrées à des fins
                                de sécurité, qualité et résolution d’incidents.
                            </p>

                            <h4>7. Conservation</h4>
                            <p>
                                Nous conservons vos données pendant la durée nécessaire aux finalités : fourniture du
                                service, obligations légales,
                                résolution de litiges et sécurité. Les durées peuvent varier selon le type de données
                                (transactions, logs, support).
                            </p>

                            <h4>8. Sécurité</h4>
                            <p>
                                Nous appliquons des mesures de sécurité raisonnables (contrôle d’accès, chiffrement en
                                transit quand possible,
                                bonnes pratiques de développement). Aucun système n’est infaillible : en cas d’incident
                                majeur, nous agirons pour limiter l’impact.
                            </p>

                            <h4>9. Vos droits</h4>
                            <ul>
                                <li>Accès, rectification, mise à jour de vos informations.</li>
                                <li>Suppression/fermeture de compte (sous réserve d’obligations légales).</li>
                                <li>Opposition à certains traitements / retrait du consentement (ex : localisation) via les
                                    réglages.</li>
                            </ul>

                            <h4>10. Cookies (site web)</h4>
                            <p>
                                Le site peut utiliser des cookies techniques (fonctionnement, sécurité) et éventuellement de
                                mesure d’audience.
                                Vous pouvez limiter les cookies via votre navigateur (certaines fonctions peuvent être
                                affectées).
                            </p>

                            <h4>11. Données des mineurs</h4>
                            <p>
                                KinTaxi n’est pas destiné aux personnes ne remplissant pas les conditions d’âge requises par
                                la loi locale pour les services concernés.
                            </p>

                            <h4>12. Modifications</h4>
                            <p>
                                Nous pouvons mettre à jour cette politique. La version publiée avec date de mise à jour fait
                                foi.
                            </p>

                            <hr class="my-4">

                            <h4>Contact</h4>
                            <p class="mb-0">
                                Confidentialité / Support : <strong>[email_support@kintaxi.org]</strong><br>
                                Adresse/Siège : <strong>[Adresse de l’entreprise, Ville, RDC]</strong>
                            </p>

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
        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Donnez votre avis</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                    data-sb-validations="required" />
                                <label for="name">Nom complet</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Le nom est obligatoire.
                                </div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                    data-sb-validations="required,email" />
                                <label for="email">Adresse e-mail</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Le mail est obligatoire.
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Ce mail n'est pas valide.
                                </div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                    data-sb-validations="required" />
                                <label for="phone">N° de téléphone</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Le n° de téléphone est
                                    obligatoire.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                    style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Le message est
                                    obligatoire.
                                </div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Message envoyé!</div>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Erreur d'envoi de message!</div>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid">
                                <button class="btn ktx-btn-yellow rounded-pill btn-lg" id="submitButton"
                                    type="submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
