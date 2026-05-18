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
                        <h1 class="display-5 lh-1 mb-3">Conditions d’utilisation</h1>
                        <p class="text-muted mb-4">
                            Dernière mise à jour : <strong>16 décembre 2025</strong>
                        </p>

                        <div class="bg-white rounded-4 shadow-sm p-4 p-lg-5" style="min-height: 50rem;">

                            <h4>1. Objet</h4>
                            <p>
                                Les présentes Conditions d’utilisation (“Conditions”) régissent l’accès et l’utilisation du
                                site web,
                                de l’application mobile KinTaxi et de ses services : <strong>courses (transport)</strong>,
                                <strong>location de véhicules</strong>,
                                fonctionnalités de <strong>paiement en ligne</strong> et <strong>appel intégré</strong>
                                visant à éviter le partage des informations personnelles
                                (par exemple, masquage des numéros de téléphone).
                            </p>

                            <h4>2. Définitions</h4>
                            <ul>
                                <li><strong>“KinTaxi”, “nous”</strong> : l’opérateur de la plateforme.</li>
                                <li><strong>“Utilisateur”, “vous”</strong> : toute personne utilisant la plateforme.</li>
                                <li><strong>“Chauffeur/Partenaire”</strong> : conducteur ou propriétaire de véhicule
                                    proposant un service via KinTaxi.</li>
                                <li><strong>“Course”</strong> : trajet demandé via l’application.</li>
                                <li><strong>“Location”</strong> : réservation d’un véhicule pour une durée déterminée.</li>
                            </ul>

                            <h4>3. Acceptation</h4>
                            <p>
                                En utilisant KinTaxi, vous acceptez ces Conditions. Si vous n’acceptez pas, n’utilisez pas
                                la plateforme.
                            </p>

                            <h4>4. Conditions d’accès (âge, compte, exactitude)</h4>
                            <ul>
                                <li>Vous devez fournir des informations exactes lors de la création du compte.</li>
                                <li>Vous êtes responsable de la confidentialité de vos identifiants et de toute activité sur
                                    votre compte.</li>
                                <li>Si la loi locale exige un âge minimum pour certains services (paiement, location), vous
                                    confirmez le respecter.</li>
                            </ul>

                            <h4>5. Description du service</h4>
                            <p>
                                KinTaxi met à disposition une plateforme technologique facilitant :
                                (i) la mise en relation entre passagers et chauffeurs pour des courses,
                                (ii) la mise en relation pour la location de véhicules,
                                (iii) des options de paiement (selon disponibilité),
                                (iv) un système d’appel/messagerie dans l’application afin de limiter l’exposition des
                                contacts personnels.
                            </p>

                            <h4>6. Prix, paiements et facturation</h4>
                            <ul>
                                <li>Les tarifs peuvent dépendre de la distance, du temps, du trafic, de la zone, du type de
                                    véhicule et/ou de promotions.</li>
                                <li>Les paiements en ligne sont traités via des prestataires de paiement. KinTaxi peut ne
                                    jamais stocker l’intégralité des données de carte.</li>
                                <li>Vous autorisez KinTaxi et/ou le prestataire de paiement à débiter les montants dus
                                    (course/location, frais applicables, pénalités raisonnables).</li>
                            </ul>

                            <h4>7. Annulations, retards, no-show</h4>
                            <p>
                                Des frais peuvent s’appliquer en cas d’annulation tardive, d’absence au point de prise en
                                charge (“no-show”),
                                ou de non-restitution conforme du véhicule en location. Les règles applicables peuvent être
                                affichées dans l’application.
                            </p>

                            <h4>8. Règles de conduite et sécurité</h4>
                            <ul>
                                <li>Interdiction d’utiliser KinTaxi à des fins illégales, frauduleuses ou nuisibles.</li>
                                <li>Respect du chauffeur/partenaire, du véhicule, et des biens transportés.</li>
                                <li>KinTaxi peut suspendre un compte en cas de comportement dangereux, harcèlement, menaces,
                                    discrimination, etc.</li>
                            </ul>

                            <h4>9. Appels intégrés et confidentialité des contacts</h4>
                            <p>
                                Pour protéger la vie privée, KinTaxi peut fournir un système d’appel/messagerie “in-app” qui
                                évite de partager directement
                                les numéros personnels. Selon l’implémentation, des identifiants temporaires, des numéros
                                relais ou d’autres mécanismes
                                techniques peuvent être utilisés.
                            </p>

                            <h4>10. Contenu, avis et évaluations</h4>
                            <p>
                                Vous pouvez laisser des avis/notes. Vous acceptez de publier un contenu vrai, respectueux et
                                non diffamatoire.
                                KinTaxi peut modérer/supprimer un contenu inapproprié.
                            </p>

                            <h4>11. Propriété intellectuelle</h4>
                            <p>
                                Le site, l’application, les marques, logos, textes et éléments graphiques appartiennent à
                                KinTaxi ou à ses concédants.
                                Toute reproduction non autorisée est interdite.
                            </p>

                            <h4>12. Responsabilité</h4>
                            <p>
                                KinTaxi met en œuvre des moyens raisonnables pour fournir le service, mais ne garantit pas
                                une disponibilité continue
                                (maintenance, réseau, incidents). Dans la mesure permise par la loi, KinTaxi n’est pas
                                responsable des dommages indirects
                                (perte de profit, perte de données, etc.).
                            </p>

                            <h4>13. Assurance, incidents, objets perdus</h4>
                            <p>
                                En cas d’incident, contactez l’assistance KinTaxi. Les objets perdus peuvent être signalés
                                via l’application ou le support.
                                La récupération dépend de la disponibilité du partenaire.
                            </p>

                            <h4>14. Suspension et résiliation</h4>
                            <p>
                                KinTaxi peut suspendre/résilier votre accès en cas de violation des Conditions, risque de
                                fraude, ou exigence légale.
                                Vous pouvez cesser d’utiliser le service à tout moment.
                            </p>

                            <h4>15. Modifications</h4>
                            <p>
                                KinTaxi peut modifier ces Conditions. La version à jour sera publiée sur le site/app avec
                                une date de mise à jour.
                                En continuant d’utiliser KinTaxi après publication, vous acceptez les modifications.
                            </p>

                            <h4>16. Droit applicable et litiges</h4>
                            <p>
                                Ces Conditions sont régies par les lois applicables en <strong>République Démocratique du
                                    Congo</strong>, sauf disposition impérative contraire.
                                En cas de litige, les parties privilégieront une résolution amiable avant toute action.
                            </p>

                            <hr class="my-4">

                            <h4>Contact</h4>
                            <p class="mb-0">
                                Support KinTaxi : <strong>[email_support@kintaxi.org]</strong><br>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
