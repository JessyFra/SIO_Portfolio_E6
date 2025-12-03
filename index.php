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
                        Spécialisé en PHP, Symfony et développement avec une forte orientation architecture MVC et API RESTful.
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
    <section id="stages" class="section-padding stages-section">
        <div class="container">
            <h2 class="section-title text-center mb-5">Stages</h2>

            <div class="timeline-container">
                <!-- Stage 1 -->
                <div class="timeline-item-stage">
                    <div class="timeline-marker">
                        <i class="bi bi-briefcase"></i>
                    </div>
                    <div class="timeline-content-stage">
                        <div class="stage-date-badge">
                            <i class="bi bi-calendar-event"></i>
                            <span>12 Mai - 27 Juin 2025</span>
                        </div>
                        <h3 class="stage-title">Stage 1 - BlackHole Événements</h3>

                        <div class="stage-details">
                            <div class="stage-info-block">
                                <div class="info-icon">
                                    <i class="bi bi-building"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Entreprise</h5>
                                    <p>Spécialiste de l'événementiel sur mesure : mariages, concerts, festivals... basée à Riom</p>
                                </div>
                            </div>

                            <div class="stage-info-block">
                                <div class="info-icon">
                                    <i class="bi bi-list-task"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Missions</h5>
                                    <p>- Refonte complète du site</p>
                                    <p>- Audit du site AVI (Société mère) au vu d'une réunion avec leur agence web extérieure</p>
                                    <p>- Participation à leurs activités afin de m'intégrer et de m'imprégner de leur cœur de métier</p>
                                </div>
                            </div>

                            <div class="stage-info-block">
                                <div class="info-icon">
                                    <i class="bi bi-tools"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Technologies</h5>
                                    <div class="tech-tags-stage">
                                        <span class="badge bg-tech-stage">PHP</span>
                                        <span class="badge bg-tech-stage">MySQL</span>
                                        <span class="badge bg-tech-stage">CSS/JS</span>
                                        <span class="badge bg-tech-stage">Bootstrap</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stage-action">
                            <a href="https://www.blackhole-evenements.com/" class="btn-stage me-3" target="_blank">
                                <i class="bi bi-globe"></i>
                                <span>Lien du site</span>
                            </a>
                            <a href="assets/documents/rapports-stages/RapportStage_JessyFrachisse_BlackHole.pdf" class="btn-stage" target="_blank">
                                <i class="bi bi-file-pdf-fill"></i>
                                <span>Consulter le rapport</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Stage 2 -->
                <div class="timeline-item-stage">
                    <div class="timeline-marker">
                        <i class="bi bi-briefcase"></i>
                    </div>
                    <div class="timeline-content-stage">
                        <div class="stage-date-badge upcoming">
                            <i class="bi bi-calendar-event"></i>
                            <span>05 Janvier - 13 Février 2026</span>
                        </div>
                        <h3 class="stage-title">Stage 2 - APA 63</h3>

                        <div class="stage-details">
                            <div class="stage-info-block">
                                <div class="info-icon">
                                    <i class="bi bi-building"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Entreprise</h5>
                                    <p>Association protectrice des animaux du Puy-de-Dôme</p>
                                </div>
                            </div>

                            <div class="stage-info-block">
                                <div class="info-icon">
                                    <i class="bi bi-list-task"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Missions</h5>
                                    <p>- </p>
                                    <p>- </p>
                                </div>
                            </div>

                            <div class="stage-info-block">
                                <div class="info-icon">
                                    <i class="bi bi-tools"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Technologies</h5>
                                    <div class="tech-tags-stage">
                                        <span class="badge bg-tech-stage">...</span>
                                        <span class="badge bg-tech-stage">...</span>
                                        <span class="badge bg-tech-stage">...</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stage-action">
                            <a href="#" class="btn-stage me-3">
                                <i class="bi bi-globe"></i>
                                <span>Démo</span>
                            </a>
                            <a href="#" class="btn-stage">
                                <i class="bi bi-hourglass-split"></i>
                                <span>Rapport à venir</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projets E6 Section -->
    <section id="projets" class="section-padding projects-section">
        <div class="container">
            <h2 class="section-title text-center mb-5">Projets</h2>

            <div class="row g-4">

                <!-- Projet 1 - Civilipédia -->
                <div class="col-lg-6">
                    <div class="project-card h-100">
                        <!-- Image du projet -->
                        <div class="project-image">
                            <img src="assets/img/imgTPWiki.jpg" alt="Civilipédia" class="img-fluid">
                            <div class="project-overlay">
                                <div class="project-status">
                                    <span class="badge bg-success">
                                        <i class="bi bi-check-circle-fill"></i> Terminé
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="project-body">
                            <div class="project-header">
                                <h3>Civilipédia</h3>
                                <p class="project-tagline">Encyclopédie interactive des civilisations</p>
                            </div>

                            <div class="project-content">
                                <div class="project-description">
                                    <p>Civilipédia est un wiki collaboratif sur les civilisations, pensé pour être accessible, responsive et géré par différents niveaux d’utilisateurs, avec un développement structuré et une documentation claire</p>
                                </div>

                                <div class="project-tech">
                                    <h5><i class="bi bi-code-slash"></i> Technologies</h5>
                                    <div class="tech-tags-project">
                                        <span class="badge bg-tech-project">PHP</span>
                                        <span class="badge bg-tech-project">MySQL</span>
                                        <span class="badge bg-tech-project">Bootstrap</span>
                                        <span class="badge bg-tech-project">JavaScript</span>
                                        <span class="badge bg-tech-project">MVC</span>
                                    </div>
                                </div>
                            </div>

                            <div class="project-footer">
                                <div class="project-links">
                                    <a href="https://sio.jbdelasalle.com/~jfrachisse/TP_Wiki_ClientAPI/" class="project-link" target="_blank" title="Démo en ligne">
                                        <i class="bi bi-globe"></i>
                                        <span>Démo</span>
                                    </a>
                                    <a href="#" class="project-link" target="_blank" title="Fiche E6">
                                        <i class="bi bi-file-earmark-text"></i>
                                        <span>Fiche E6</span>
                                    </a>
                                    <a href="#" class="project-link" target="_blank" title="Rapport">
                                        <i class="bi bi-file-pdf"></i>
                                        <span>Rapport</span>
                                    </a>
                                    <a href="#" class="project-link" target="_blank" title="Documentation API">
                                        <i class="bi bi-book"></i>
                                        <span>API</span>
                                    </a>
                                    <a href="#" class="project-link" target="_blank" title="Dépôt GitHub">
                                        <i class="bi bi-github"></i>
                                        <span>GitHub</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projet 2 - À choisir -->
                <div class="col-lg-6">
                    <div class="project-card h-100">
                        <!-- Image du projet -->
                        <div class="project-image">
                            <img src="assets/images/project2-preview.jpg" alt="En attente de choisir" class="img-fluid">
                            <div class="project-overlay">
                                <div class="project-status">
                                    <span class="badge bg-warning">
                                        <i class="bi bi-hourglass-split"></i> En cours
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="project-body">
                            <div class="project-header">
                                <h3>Nom du Projet 2</h3>
                                <p class="project-tagline">Slogan du projet</p>
                            </div>

                            <div class="project-content">
                                <div class="project-description">
                                    <p>Description du second projet</p>
                                </div>

                                <div class="project-tech">
                                    <h5><i class="bi bi-code-slash"></i> Technologies</h5>
                                    <div class="tech-tags-project">
                                        <span class="badge bg-tech-project">...</span>
                                        <span class="badge bg-tech-project">...</span>
                                        <span class="badge bg-tech-project">...</span>
                                    </div>
                                </div>
                            </div>

                            <div class="project-footer">
                                <div class="project-links">
                                    <a href="#" class="project-link" target="_blank" title="Démo en ligne">
                                        <i class="bi bi-globe"></i>
                                        <span>Démo</span>
                                    </a>
                                    <a href="#" class="project-link" target="_blank" title="Fiche E6">
                                        <i class="bi bi-file-earmark-text"></i>
                                        <span>Fiche E6</span>
                                    </a>
                                    <a href="#" class="project-link" target="_blank" title="Rapport">
                                        <i class="bi bi-file-pdf"></i>
                                        <span>Rapport</span>
                                    </a>
                                    <a href="#" class="project-link" target="_blank" title="Documentation API">
                                        <i class="bi bi-book"></i>
                                        <span>API</span>
                                    </a>
                                    <a href="#" class="project-link" target="_blank" title="Dépôt GitHub">
                                        <i class="bi bi-github"></i>
                                        <span>GitHub</span>
                                    </a>
                                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>

</html>