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

            <div class="real-list">

                <!-- Réalisation 1 -->
                <div class="real-card anim" style="--d:.1s">
                    <div class="real-img-wrap">
                        <img src="assets/img/imgFansite.jpg" alt="Fansite" class="proj-img">
                    </div>
                    <div class="proj-body">
                        <p class="proj-tag">Fansite</p>
                        <h3 class="proj-title">Les Mystérieuses cités d'or</h3>
                        <p class="proj-desc">Fansite consacré aux Mystérieuses Cités d’Or, présentant l’univers de la série avec un design responsive via Bootstrap/CSS.</p>
                        <div class="tag-row">
                            <span class="tag">HTML5</span>
                            <span class="tag">CSS3</span>
                            <span class="tag">Bootstrap</span>
                        </div>
                    </div>
                </div>

                <!-- Réalisation 2 -->
                <div class="real-card anim" style="--d:.2s">
                    <div class="real-img-wrap">
                        <img src="assets/img/imgInstagrume.svg" alt="Instagrume" class="proj-img">
                    </div>
                    <div class="proj-body">
                        <p class="proj-tag">Promotion d'une alimentation saine</p>
                        <h3 class="proj-title">Instagrume</h3>
                        <p class="proj-desc">Instagrume est une plateforme web visant à encourager une alimentation saine en permettant aux utilisateurs de partager des photos de fruits et légumes. L’application propose des fonctionnalités différentes selon le rôle (visiteur, utilisateur connecté, modérateur) et s’appuie sur un client web en Symfony/Twig et une API Symfony sécurisée par JWT. Les images sont stockées côté API et le site est entièrement responsive grâce à Bootstrap.</p>
                        <div class="tag-row">
                            <span class="tag">Symfony</span>
                            <span class="tag">Twig</span>
                            <span class="tag">Doctrine ORM</span>
                            <span class="tag">JWT</span>
                            <span class="tag">API REST</span>
                            <span class="tag">PHP</span>
                        </div>
                    </div>
                </div>

                <!-- Réalisation 3 -->
                <div class="real-card anim" style="--d:.3s">
                    <div class="real-img-wrap">
                        <img src="assets/img/imgSeriousGame.svg" alt="Serious Game" class="proj-img">
                    </div>
                    <div class="proj-body">
                        <p class="proj-tag">Serious game éducatif</p>
                        <h3 class="proj-title">Paper Quiz</h3>
                        <p class="proj-desc">PaperQuizz est un serious game destiné aux enseignants et élèves, permettant de réviser via des quizz intégrés à un mini‑jeu 2D. L’application se compose d’une API Node.js, d’une interface d’administration Angular et d’un jeu Phaser où l’on lance une boule de papier dans une corbeille pour répondre vrai ou faux, le tout dans une ambiance de salle de classe ancienne.</p>
                        <div class="tag-row">
                            <span class="tag">Node.js</span>
                            <span class="tag">Angular</span>
                            <span class="tag">Phaser 3</span>
                            <span class="tag">QR Code</span>
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