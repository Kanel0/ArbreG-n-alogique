<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" crossorigin="anonymous" />
    <?php include("../css/utilities.php"); ?>
    <?php include("../css/style.php"); ?>
    <title>Registre - ArbreG.</title>
</head>
<body>

    <div class="navbar">
        <div class="container">
            <h1 class="logo">ArbreG.</h1>
            <nav>
                <ul>
                    <li><a href="../home/index.php">Accueil</a></li>
                    <li><a href="registre.php" class="active">Registre</a></li>
                    <li><a href="../docs/docs.php">Membres</a></li>
                    <li><a href="../docs/arbre.php">Arbre</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="page-header">
        <div class="container">
            <h1>Registre familial</h1>
            <p>Ajoutez les membres de votre famille</p>
        </div>
    </div>

    <section class="section" style="padding-top:40px;">
        <div class="container">
            <div style="display:flex; justify-content:center;">
                <div class="form-card">
                    <?php require_once __DIR__ . '/../config/database.php'; $relation = getPDO(); ?>
                    <h2>Ajouter un membre</h2>
                    <p class="subtitle">Remplissez les informations du membre</p>
                    <form method="post">
                        <div class="form-group">
                            <label>Nom complet</label>
                            <input type="text" placeholder="Votre nom" name="nom" required>
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
                        <button type="submit" class="btn btn-primary btn-block" name="save">Enregistrer</button>
                    </form>
                    <?php include("insertion.php"); ?>
                </div>
            </div>
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
                        <li><a href="registre.php">Registre</a></li>
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