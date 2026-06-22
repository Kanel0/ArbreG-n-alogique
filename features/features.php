<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" crossorigin="anonymous" />
    <?php include("../css/utilities.php"); ?>
    <?php include("../css/style.php"); ?>
    <title>Fonctionnalites - ArbreG.</title>
</head>
<body>

    <div class="navbar">
        <div class="container">
            <h1 class="logo">ArbreG.</h1>
            <nav>
                <ul>
                    <li><a href="../home/index.php">Accueil</a></li>
                    <li><a href="../person/registre.php">Registre</a></li>
                    <li><a href="../docs/docs.php">Membres</a></li>
                    <li><a href="../docs/arbre.php">Arbre</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="hero" style="min-height:300px;">
        <div class="container text-center">
            <h1 style="font-size:40px;">Fonctionnalites</h1>
            <p style="margin: 16px auto 0; max-width:600px;">Decouvrez tout ce que vous pouvez faire avec ArbreG. pour construire votre arbre genealogique.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="icon" style="background:var(--gradient-1);"><i class="fas fa-user-plus"></i></div>
                    <div>
                        <h3>Ajout de membres</h3>
                        <p>Enregistrez les membres de votre famille avec nom, date de naissance et genre.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="icon" style="background:var(--gradient-3);"><i class="fas fa-people-arrows"></i></div>
                    <div>
                        <h3>Relations parent-enfant</h3>
                        <p>Associez chaque enfant a ses parents pour construire l'arbre automatiquement.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="icon" style="background:var(--gradient-4);"><i class="fas fa-heart"></i></div>
                    <div>
                        <h3>Mariages</h3>
                        <p>Enregistrez les unions entre les membres avec la date de mariage.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="icon" style="background:var(--gradient-5);"><i class="fas fa-cross"></i></div>
                    <div>
                        <h3>Deces</h3>
                        <p>Ajoutez les dates de deces pour un suivi complet.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="icon" style="background:var(--gradient-2);"><i class="fas fa-search"></i></div>
                    <div>
                        <h3>Recherche</h3>
                        <p>Trouvez rapidement un membre grace a la barre de recherche.</p>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="icon" style="background:var(--gradient-1);"><i class="fas fa-tree"></i></div>
                    <div>
                        <h3>Arbre visuel</h3>
                        <p>Visualisez l'arbre genealogique complet avec une interface interactive.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2>Pret a essayer ?</h2>
            <p>Rejoignez ArbreG. et commencez a explorer l'histoire de votre famille.</p>
            <a href="../person/registre.php" class="btn btn-outline">Commencer maintenant <i class="fas fa-arrow-right"></i></a>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="grid grid-3" style="align-items:start;">
                <div>
                    <h3>ArbreG.</h3>
                    <p>Application de gestion d'arbre genealogique.</p>
                </div>
                <nav>
                    <p style="font-weight:600; margin-bottom:12px; color:#fff;">Navigation</p>
                    <ul>
                        <li><a href="../home/index.php">Accueil</a></li>
                        <li><a href="../person/registre.php">Registre</a></li>
                        <li><a href="../docs/docs.php">Membres</a></li>
                        <li><a href="../docs/arbre.php">Arbre</a></li>
                    </ul>
                </nav>
                <div class="social">
                    <p style="font-weight:600; margin-bottom:12px; color:#fff;">Suivez-nous</p>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div style="border-top:1px solid rgba(255,255,255,0.1); margin-top:32px; padding-top:24px; text-align:center;">
                <p>&copy; 2024 ArbreG.</p>
            </div>
        </div>
    </footer>

</body>
</html>