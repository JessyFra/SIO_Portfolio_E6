<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Jessy Frachisse</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Mono:wght@300;400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-inner">
            <a class="nav-brand" href="#accueil">Jessy <span>Frachisse</span></a>
            <div class="nav-links">
                <a class="nav-link" href="#accueil">Accueil</a>
                <a class="nav-link" href="#stages">Stages</a>
                <a class="nav-link" href="#projets_retenus">Projets retenus</a>
                <a class="nav-link" href="#autres_realisations">Autres réalisations</a>
            </div>
        </div>
    </nav>

    <!-- ── HERO ── -->
    <section id="accueil" class="hero-section">
        <div class="wrapper">

            <header class="hero-header anim" style="--d:0s">
                <p class="eyebrow">Portfolio BTS SIO SLAM</p>
                <h1>Jessy <span>Frachisse</span></h1>
                <p class="hero-sub">Développeur étudiant · BTS SIO option SLAM</p>
            </header>

            <div class="hero-body">
                <!-- À propos -->
                <div class="hero-about anim" style="--d:.15s">
                    <p class="section-label-inline">À propos</p>
                    <p class="hero-desc">
                        Étudiant en BTS SIO option SLAM, passionné par le développement web et la création d'applications innovantes.
                        Spécialisé en PHP, Symfony et développement avec une forte orientation architecture MVC et API RESTful.
                    </p>
                    <div class="hero-stats">
                        <div class="stat">
                            <span class="stat-n">2+</span>
                            <span class="stat-l">Années d'études</span>
                        </div>
                        <div class="stat">
                            <span class="stat-n">4+</span>
                            <span class="stat-l">Projets réalisés</span>
                        </div>
                        <div class="stat">
                            <span class="stat-n">2</span>
                            <span class="stat-l">Stages</span>
                        </div>
                    </div>
                    <div class="hero-actions">
                        <a href="#projets_retenus" class="btn-primary">
                            <i class="bi bi-code-square"></i> Projets retenus
                        </a>
                        <a href="assets/documents/CVJessy.png" class="btn-ghost" target="_blank">
                            <i class="bi bi-download"></i> CV
                        </a>
                        <a href="assets/documents/tableau-synthese-E5-Jessy-Frachisse.xlsx" class="btn-ghost" target="_blank">
                            <i class="bi bi-table"></i> Tableau E5
                        </a>
                    </div>
                </div>

                <!-- Parcours -->
                <div class="hero-parcours anim" style="--d:.3s">
                    <p class="section-label-inline">Parcours &amp; Formation</p>

                    <div class="mini-timeline">
                        <div class="mt-item">
                            <span class="mt-date">2023 – 2025</span>
                            <div class="mt-content">
                                <p class="mt-title">Domaine informatique</p>
                                <div class="tag-row">
                                    <span class="tag">BAC+4 Concepteur web</span>
                                    <span class="tag">BTS SIO SLAM</span>
                                    <span class="tag">Dév Back-End chez SESIOM</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-item">
                            <span class="mt-date">2019 – 2022</span>
                            <div class="mt-content">
                                <p class="mt-title">Domaine autre</p>
                                <div class="tag-row">
                                    <span class="tag">Relation client IKEA</span>
                                    <span class="tag">Manutentionnaire - Ferme des Volcans</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-item">
                            <span class="mt-date">2015 – 2020</span>
                            <div class="mt-content">
                                <p class="mt-title">Domaine socio-éducatif</p>
                                <div class="tag-row">
                                    <span class="tag">CAP Petite Enfance</span>
                                    <span class="tag">BAFA</span>
                                    <span class="tag">BAC ST2S</span>
                                    <span class="tag">Encadrant &amp; Animateur</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ── STAGES ── -->
    <section id="stages" class="page-section">
        <div class="wrapper">

            <div class="section-heading anim" style="--d:0s">
                <div class="section-label-row">
                    <span>Stages</span>
                </div>
            </div>

            <div class="timeline-wrap">

                <!-- Stage 1 -->
                <div class="tl-item anim" style="--d:.1s">
                    <div class="tl-marker"></div>
                    <div class="tl-card">
                        <div class="tl-top">
                            <span class="mono-date"><i class="bi bi-calendar3"></i> 12 Mai – 27 Juin 2025</span>
                            <h3 class="tl-title">BlackHole Événements</h3>
                        </div>

                        <div class="tl-grid">
                            <div class="tl-block">
                                <p class="tl-block-label">Entreprise</p>
                                <p class="tl-block-text">Spécialiste de l'événementiel sur mesure - mariages, concerts, festivals, basée à Riom.</p>
                            </div>
                            <div class="tl-block">
                                <p class="tl-block-label">Missions</p>
                                <ul class="tl-list">
                                    <li>Refonte complète du site</li>
                                    <li>Audit du site AVI (Société mère)</li>
                                    <li>Participation aux activités pour m'imprégner de leur cœur de métier</li>
                                </ul>
                            </div>
                            <div class="tl-block">
                                <p class="tl-block-label">Technologies</p>
                                <div class="tag-row">
                                    <span class="tag">PHP</span>
                                    <span class="tag">MySQL</span>
                                    <span class="tag">CSS / JS</span>
                                    <span class="tag">Bootstrap</span>
                                </div>
                            </div>
                        </div>

                        <div class="tl-actions">
                            <a href="https://www.blackhole-evenements.com/" class="card-link" target="_blank">
                                <i class="bi bi-globe2"></i> Voir le site
                            </a>
                            <a href="assets/documents/rapports-stages/RapportStage_JessyFrachisse_BlackHole.pdf" class="card-link" target="_blank">
                                <i class="bi bi-file-pdf"></i> Rapport de stage
                            </a>
                            <a href="assets/documents/attestations-stages/AttestationStage_BlackHole.jpg" class="card-link" target="_blank">
                                <i class="bi bi-patch-check"></i> Attestation de stage
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Stage 2 -->
                <div class="tl-item anim" style="--d:.2s">
                    <div class="tl-marker"></div>
                    <div class="tl-card">
                        <div class="tl-top">
                            <span class="mono-date"><i class="bi bi-calendar3"></i> 05 Janvier – 13 Février 2026</span>
                            <h3 class="tl-title">APA 63</h3>
                        </div>

                        <div class="tl-grid">
                            <div class="tl-block">
                                <p class="tl-block-label">Entreprise</p>
                                <p class="tl-block-text">Association protectrice des animaux du Puy-de-Dôme.</p>
                            </div>
                            <div class="tl-block">
                                <p class="tl-block-label">Missions</p>
                                <ul class="tl-list">
                                    <li>Création d'une application web mobile pour gestion des promenades</li>
                                    <li>Réunion d'apprentissage de l'outil</li>
                                    <li>Modifications sur le WordPress de leur site</li>
                                </ul>
                            </div>
                            <div class="tl-block">
                                <p class="tl-block-label">Technologies</p>
                                <div class="tag-row">
                                    <span class="tag">PHP</span>
                                    <span class="tag">JavaScript</span>
                                    <span class="tag">Import CSV</span>
                                    <span class="tag">WordPress</span>
                                </div>
                            </div>
                        </div>

                        <div class="tl-actions">
                            <span class="card-link muted">
                                <i class="bi bi-lock"></i> Lien privé
                            </span>
                            <a href="assets/documents/rapports-stages/RapportStage_JessyFrachisse_APA63.pdf" class="card-link" target="_blank">
                                <i class="bi bi-file-pdf"></i> Rapport de stage
                            </a>
                            <a href="assets/documents/attestations-stages/AttestationStage_APA63.jpg" class="card-link" target="_blank">
                                <i class="bi bi-patch-check"></i> Attestation de stage
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── PROJETS ── -->
    <section id="projets_retenus" class="page-section">
        <div class="wrapper">

            <div class="section-heading anim" style="--d:0s">
                <div class="section-label-row">
                    <span>Projets retenus</span>
                </div>
            </div>

            <div class="cards-grid">

                <!-- Projet 1 - Civilipédia -->
                <div class="proj-card anim" style="--d:.2s">
                    <div class="proj-img-wrap">
                        <img src="assets/img/imgCivilipedia.jpg" alt="Civilipédia" class="proj-img">
                    </div>
                    <div class="proj-body">
                        <p class="proj-tag">Encyclopédie collaborative</p>
                        <h3 class="proj-title">Civilipédia</h3>
                        <p class="proj-desc">Wiki collaboratif sur les civilisations, accessible, responsive, géré par niveaux d'utilisateurs avec architecture MVC et documentation claire.</p>
                        <div class="tag-row">
                            <span class="tag">PHP</span>
                            <span class="tag">MySQL</span>
                            <span class="tag">Bootstrap</span>
                            <span class="tag">JavaScript</span>
                            <span class="tag">MVC</span>
                        </div>
                        <div class="proj-links">
                            <a href="#" class="card-link sm" target="_blank">
                                <i class="bi bi-globe2"></i> Démo
                            </a>
                            <a href="assets/documents/fiche-e6/E6_Civilipedia.pdf" class="card-link sm" target="_blank">
                                <i class="bi bi-file-earmark-text"></i> Fiche E6
                            </a>
                            <a href="https://github.com/JessyFra/Civilipedia_ClientAPI" class="card-link sm" target="_blank">
                                <i class="bi bi-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Projet 2 - Trouvaille -->
                <div class="proj-card anim" style="--d:.2s">
                    <div class="proj-img-wrap">
                        <img src="assets/img/imgTrouvaille.png" alt="Trouvaille" class="proj-img">
                    </div>
                    <div class="proj-body">
                        <p class="proj-tag">Site de petites annonces</p>
                        <h3 class="proj-title">Trouvaille</h3>
                        <p class="proj-desc">Plateforme de petites annonces entre particuliers - recherche par catégorie et ville, dépôt d'annonces avec photos, messagerie entre utilisateurs et espace administration.</p>
                        <div class="tag-row">
                            <span class="tag">PHP</span>
                            <span class="tag">MySQL</span>
                            <span class="tag">Bootstrap</span>
                            <span class="tag">JavaScript</span>
                            <span class="tag">MVC</span>
                        </div>
                        <div class="proj-links">
                            <a href="#" class="card-link sm" target="_blank">
                                <i class="bi bi-globe2"></i> Démo
                            </a>
                            <a href="assets/documents/fiche-e6/E6_Trouvaille.pdf" class="card-link sm" target="_blank">
                                <i class="bi bi-file-earmark-text"></i> Fiche E6
                            </a>
                            <a href="https://github.com/JessyFra/Trouvaille_ClientAPI" class="card-link sm" target="_blank">
                                <i class="bi bi-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── AUTRES RÉALISATIONS ── -->
    <section id="autres_realisations" class="page-section">
        <div class="wrapper">

            <div class="section-heading anim" style="--d:0s">
                <div class="section-label-row">
                    <span>Autres réalisations</span>
                </div>
            </div>

            <div class="cards-grid" style="grid-template-columns: repeat(3, 1fr);">

                <!-- Réalisation 1 -->
                <div class="proj-card anim" style="--d:.1s">
                    <div class="proj-img-wrap placeholder-img">
                        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.2">
                            <path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M14 8h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="proj-body">
                        <p class="proj-tag">À définir</p>
                        <h3 class="proj-title">Projet 3</h3>
                        <p class="proj-desc">Description du projet à venir.</p>
                        <div class="tag-row">
                            <span class="tag">···</span>
                        </div>
                    </div>
                </div>

                <!-- Réalisation 2 -->
                <div class="proj-card anim" style="--d:.2s">
                    <div class="proj-img-wrap placeholder-img">
                        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.2">
                            <path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M14 8h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="proj-body">
                        <p class="proj-tag">À définir</p>
                        <h3 class="proj-title">Projet 4</h3>
                        <p class="proj-desc">Description du projet à venir.</p>
                        <div class="tag-row">
                            <span class="tag">···</span>
                        </div>
                    </div>
                </div>

                <!-- Réalisation 3 -->
                <div class="proj-card anim" style="--d:.3s">
                    <div class="proj-img-wrap placeholder-img">
                        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.2">
                            <path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M14 8h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="proj-body">
                        <p class="proj-tag">À définir</p>
                        <h3 class="proj-title">Projet 5</h3>
                        <p class="proj-desc">Description du projet à venir.</p>
                        <div class="tag-row">
                            <span class="tag">···</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── FOOTER ── -->
    <footer class="site-footer">
        <div class="wrapper footer-inner">
            <p class="footer-brand">Jessy <span>Frachisse</span></p>
            <p class="footer-sub">Portfolio BTS SIO SLAM · 2024 / 2026</p>
            <div class="footer-links">
                <a href="https://github.com/JessyFra" target="_blank" class="card-link sm"><i class="bi bi-github"></i> GitHub</a>
                <a href="https://sio.jbdelasalle.com/~jfrachisse/" target="_blank" class="card-link sm"><i class="bi bi-globe2"></i> Espace SIO</a>
                <a href="assets/documents/CVJessy.png" target="_blank" class="card-link sm"><i class="bi bi-file-earmark-pdf"></i> CV</a>
                <a href="assets/documents/tableau-synthese-E5-Jessy-Frachisse.xlsx" target="_blank" class="card-link sm">
                    <i class="bi bi-table"></i> Tableau E5
                </a>
            </div>
            <p class="footer-copy">&copy; 2026 - Tous droits réservés</p>
        </div>
    </footer>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>

</html>