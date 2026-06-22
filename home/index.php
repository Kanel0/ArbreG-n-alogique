<?php include("connexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" crossorigin="anonymous" />
    <?php include("../css/utilities.php"); ?>
    <?php include("../css/style.php"); ?>
    <title>ArbreG. - Arbre Généalogique</title>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="container">
            <h1 class="logo">ArbreG.</h1>
            <nav>
                <ul>
                    <li><a href="index.php" class="active">Accueil</a></li>
                    <li><a href="../person/registre.php">Registre</a></li>
                    <li><a href="../docs/docs.php">Membres</a></li>
                    <li><a href="../docs/arbre.php">Arbre</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="grid grid-2" style="align-items:center;">
                <div>
                    <h1>Découvrez <br>vos racines</h1>
                    <p>Créez et visualisez l'arbre généalogique de votre famille. Retrouvez l'histoire de vos proches en quelques clics.</p>
                    <div class="btn-group">
                        <a href="../person/registre.php" class="btn btn-outline">+ Ajouter un membre</a>
                        <a href="../docs/arbre.php" class="btn btn-outline">Voir l'arbre</a>
                    </div>
                </div>
                <div class="hero-form">
                    <h2>Bienvenue</h2>
                    <p>Commencez par ajouter un membre à votre arbre</p>
                    <form method="post" action="../person/registre.php">
                        <div class="form-group">
                            <label>Nom complet</label>
                            <input type="text" placeholder="Entrez un nom" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label>Date de naissance</label>
                            <input type="date" name="date_de_naissance" required>
                        </div>
                        <div class="form-group">
                            <label>Genre</label>
                            <select name="genre">
                                <option>Homme</option>
                                <option>Femme</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Enregistrer <i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section">
        <div class="container">
            <h2 class="section-title animate-up">Gérez votre famille</h2>
            <p class="section-subtitle animate-up">Tous les outils pour construire et organiser votre arbre généalogique</p>
            <div class="services-grid stagger">
                <div class="service-card">
                    <div class="icon"><i class="fas fa-male"></i></div>
                    <h3>Père</h3>
                    <p>Ajoutez les informations sur le père de la famille</p>
                    <a href="../docs/docs.php" class="btn btn-primary btn-sm">Voir</a>
                </div>
                <div class="service-card">
                    <div class="icon"><i class="fas fa-female"></i></div>
                    <h3>Mère</h3>
                    <p>Ajoutez les informations sur la mère de la famille</p>
                    <a href="../docs/docs.php" class="btn btn-secondary btn-sm">Voir</a>
                </div>
                <div class="service-card">
                    <div class="icon"><i class="fas fa-child"></i></div>
                    <h3>Enfants</h3>
                    <p>Enregistrez les enfants et la génération suivante</p>
                    <a href="../docs/enfant.php" class="btn btn-secondary btn-sm">Voir</a>
                </div>
                <div class="service-card">
                    <div class="icon"><i class="fas fa-heart"></i></div>
                    <h3>Mariages</h3>
                    <p>Enregistrez les unions et les couples</p>
                    <a href="../docs/mariage.php" class="btn btn-secondary btn-sm">Voir</a>
                </div>
                <div class="service-card">
                    <div class="icon"><i class="fas fa-tree"></i></div>
                    <h3>Arbre complet</h3>
                    <p>Visualisez l'arbre généalogique complet de votre famille</p>
                    <a href="../docs/arbre.php" class="btn btn-primary btn-sm">Explorer</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="section-sm animate-up">
        <div class="container">
            <div class="gallery-grid">
                <img src="../images/famille.webp" alt="Famille">
                <img src="../images/Happiness-family.jpg" alt="Famille heureuse">
                <img src="../images/fam.jpg" alt="Famille">
                <img src="../images/logos/Granp.webp" alt="Grand-parent">
                <img src="../images/logos/Gmere.jpeg" alt="Grand-mère">
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="container">
            <h2>Prêt à construire votre arbre ?</h2>
            <p>Rejoignez ArbreG. et commencez à explorer l'histoire de votre famille dès aujourd'hui.</p>
            <a href="../person/registre.php" class="btn btn-outline btn-lg">Commencer maintenant <i class="fas fa-arrow-right"></i></a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="grid grid-3" style="align-items:start;">
                <div>
                    <h3>ArbreG.</h3>
                    <p>Application de gestion d'arbre généalogique. Retrouvez et organisez l'histoire de votre famille.</p>
                </div>
                <nav>
                    <p style="font-weight:600; margin-bottom:12px; color:#fff;">Navigation</p>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
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
                <p>&copy; 2024 ArbreG. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

</body>
</html>