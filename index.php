<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Jessy | Etudiant SIO</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#accueil">
                <span class="brand-text">Portfolio</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#accueil">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#stages">Stages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projets">Projets</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="accueil" class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Colonne gauche - Présentation -->
                <div class="col-lg-6">
                    <h1 class="hero-title mb-3">Jessy</h1>
                    <h2 class="hero-subtitle mb-4">Développeur étudiant</h2>
                    <p class="hero-description mb-4">
                        Étudiant en BTS SIO option SLAM, passionné par le développement web et la création d'applications innovantes.
                        Spécialisé en PHP, Symfony et développement avec une forte orientation architecture MVC et API REST.
                    </p>
                    <div class="hero-stats mb-4">
                        <div class="stat-item">
                            <div class="stat-number">2+</div>
                            <div class="stat-label">Années d'études</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">4+</div>
                            <div class="stat-label">Projets réalisés</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">2</div>
                            <div class="stat-label">Stages</div>
                        </div>
                    </div>
                    <div class="hero-buttons">
                        <a href="#projets" class="btn btn-primary me-3">
                            <i class="bi bi-code-square me-2"></i>Projets
                        </a>
                        <a href="assets/documents/CVJessy.png" class="btn btn-outline-light" target="_blank">
                            <i class="bi bi-download me-2"></i>Télécharger CV
                        </a>
                    </div>
                </div>

                <!-- Colonne droite - Parcours rapide -->
                <div class="col-lg-6">
                    <div class="hero-card">
                        <h3 class="hero-card-title mb-4">
                            <i class="bi bi-rocket-takeoff me-2"></i>Parcours & Formation
                        </h3>
                        <div class="hero-timeline">
                            <div class="hero-timeline-item">
                                <div class="hero-timeline-date">2023 - 2025</div>
                                <div class="hero-timeline-content">
                                    <h4>Domaine informatique</h4>
                                    <div class="hero-skills">
                                        <span class="badge bg-tech-hero">BAC+4 Concepteur web "PHP/Symfony"</span>
                                        <span class="badge bg-tech-hero">BTS SIO option SLAM</span>
                                        <span class="badge bg-tech-hero">Dév Back-End chez SESIOM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-timeline-item">
                                <div class="hero-timeline-date">2019 - 2022</div>
                                <div class="hero-timeline-content">
                                    <h4>Autre domaine</h4>
                                    <div class="hero-skills">
                                        <span class="badge bg-tech-hero">Relation client IKEA</span>
                                        <span class="badge bg-tech-hero">Manutentionnaire chez Ferme des Volcans</span>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-timeline-item">
                                <div class="hero-timeline-date">2015 - 2020</div>
                                <div class="hero-timeline-content">
                                    <h4>Domaine socio-éducatif</h4>
                                    <div class="hero-skills">
                                        <span class="badge bg-tech-hero">CAP Petite Enfance</span>
                                        <span class="badge bg-tech-hero">BAFA Option "Séjours de vacances"</span>
                                        <span class="badge bg-tech-hero">BAC ST2S</span>
                                        <span class="badge bg-tech-hero">Encadrant & Animateur</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stages Section -->
    <section id="stages" class="section-padding">
        <div class="container">
            <h2 class="section-title text-center mb-5">Stages</h2>
            <div class="row g-4">

                <!-- Stage 1 -->
                <div class="col-lg-6">
                    <div class="card-custom h-100">
                        <div class="stage-header">
                            <h3>Stage 1 - [Nom de l'entreprise]</h3>
                            <p class="text">[Dates du stage]</p>
                        </div>
                        <div class="stage-content">
                            <h5>Entreprise</h5>
                            <p>[Description courte de l'entreprise - secteur d'activité, taille, localisation]</p>

                            <h5 class="mt-3">Missions</h5>
                            <p>[Résumé des missions effectuées pendant le stage]</p>

                            <h5 class="mt-3">Technologies</h5>
                            <div class="tech-tags">
                                <span class="badge bg-tech">PHP</span>
                                <span class="badge bg-tech">MySQL</span>
                                <span class="badge bg-tech">Bootstrap</span>
                                <!-- Ajouter les technologies utilisées -->
                            </div>
                        </div>
                        <div class="stage-footer mt-4">
                            <a href="assets/documents/rapports-stages/rapport-stage-1.pdf" class="btn btn-outline-light" target="_blank">
                                <i class="bi bi-file-pdf"></i> Voir le rapport
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Stage 2 -->
                <div class="col-lg-6">
                    <div class="card-custom h-100">
                        <div class="stage-header">
                            <h3>Stage 2 - [Nom de l'entreprise]</h3>
                            <p class="text">[Dates du stage] - À venir</p>
                        </div>
                        <div class="stage-content">
                            <h5>Entreprise</h5>
                            <p>[Description courte de l'entreprise - à compléter après le stage]</p>

                            <h5 class="mt-3">Missions</h5>
                            <p>[Missions prévues ou effectuées]</p>

                            <h5 class="mt-3">Technologies</h5>
                            <div class="tech-tags">
                                <span class="badge bg-tech">[Technologies]</span>
                            </div>
                        </div>
                        <div class="stage-footer mt-4">
                            <a href="#" class="btn btn-outline-light">
                                <i class="bi bi-file-pdf"></i> Rapport à venir
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Projets E6 Section -->
    <section id="projets" class="section-padding">
        <div class="container">
            <h2 class="section-title text-center mb-5">Projets</h2>

            <div class="row g-4">

                <!-- Projet 1 - Civilipédia -->
                <div class="col-lg-6">
                    <div class="card-custom project-card h-100">
                        <div class="project-header">
                            <h3>Civilipédia</h3>
                        </div>

                        <div class="project-content">
                            <h5>Description</h5>
                            <p>[Description du projet Civilipédia - objectifs, fonctionnalités principales, contexte]</p>

                            <h5 class="mt-3">Architecture</h5>
                            <p>
                                <strong>Client :</strong> Interface web MVC<br>
                                <strong>API :</strong> API REST documentée (Swagger)
                            </p>

                            <h5 class="mt-3">Technologies</h5>
                            <div class="tech-tags">
                                <span class="badge bg-tech">PHP</span>
                                <span class="badge bg-tech">MySQL</span>
                                <span class="badge bg-tech">Bootstrap</span>
                                <span class="badge bg-tech">JavaScript</span>
                                <span class="badge bg-tech">MVC</span>
                            </div>
                        </div>

                        <div class="project-footer mt-4">
                            <div class="d-flex flex-wrap gap-2">
                                <a href="#" class="btn btn-outline-light" target="_blank">
                                    <i class="bi bi-globe"></i> Démo en ligne
                                </a>
                                <a href="#" class="btn btn-outline-light" target="_blank">
                                    <i class="bi bi-file-earmark-text"></i> Fiche E6
                                </a>
                                <a href="#" class="btn btn-outline-light" target="_blank">
                                    <i class="bi bi-file-pdf"></i> Rapport
                                </a>
                                <a href="#" class="btn btn-outline-light" target="_blank">
                                    <i class="bi bi-book"></i> Swagger API
                                </a>
                                <a href="#" class="btn btn-outline-light" target="_blank">
                                    <i class="bi bi-github"></i> Dépôt Git
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projet 2 - À choisir -->
                <div class="col-lg-6">
                    <div class="card-custom project-card h-100">
                        <div class="project-header">
                            <h3>[Nom du Projet 2]</h3>
                        </div>

                        <div class="project-content">
                            <h5>Description</h5>
                            <p>[Description du second projet - à sélectionner parmi les 3 projets restants]</p>

                            <h5 class="mt-3">Architecture</h5>
                            <p>
                                <strong>Client :</strong> [Type de client]<br>
                                <strong>API :</strong> API RESTful documentée (Swagger)
                            </p>

                            <h5 class="mt-3">Technologies</h5>
                            <div class="tech-tags">
                                <span class="badge bg-tech">[Technologies]</span>
                            </div>
                        </div>

                        <div class="project-footer mt-4">
                            <div class="d-flex flex-wrap gap-2">
                                <a href="#" class="btn btn-outline-light">
                                    <i class="bi bi-globe"></i> Démo en ligne
                                </a>
                                <a href="#" class="btn btn-outline-light">
                                    <i class="bi bi-file-earmark-text"></i> Fiche E6
                                </a>
                                <a href="#" class="btn btn-outline-light">
                                    <i class="bi bi-file-pdf"></i> Rapport
                                </a>
                                <a href="#" class="btn btn-outline-light">
                                    <i class="bi bi-book"></i> Swagger API
                                </a>
                                <a href="#" class="btn btn-outline-light">
                                    <i class="bi bi-github"></i> Dépôt Git
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start mb-3 mb-lg-0">
                    <p class="mb-0 footer-text">
                        <span class="footer-brand">Jessy</span> - Portfolio BTS SIO
                    </p>
                    <p class="mb-0 footer-subtext">Développeur Etudiant</p>
                </div>
                <div class="col-lg-6">
                    <div class="footer-links text-center text-lg-end">
                        <a href="https://github.com/JessyFra" target="_blank" class="footer-btn" title="GitHub">
                            <i class="bi bi-github"></i>
                            <span>GitHub</span>
                        </a>
                        <a href="https://sio.jbdelasalle.com/~jfrachisse/" target="_blank" class="footer-btn" title="Espace Web SIO">
                            <i class="bi bi-globe"></i>
                            <span>Espace SIO</span>
                        </a>
                        <a href="assets/documents/CVJessy.png" target="_blank" class="footer-btn" title="Télécharger CV">
                            <i class="bi bi-file-earmark-pdf"></i>
                            <span>Mon CV</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p class="footer-copyright mb-0">
                        &copy; 2025 - Tous droits réservés
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://cdn.jsdeliv