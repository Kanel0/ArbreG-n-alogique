
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <?php include("../css/utilities.php"); ?>
    <?php include("../css/style.php"); ?>
    <title>Arbre généalogique</title>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="container flex">
            <h1 class="logo">ArbreG.</h1>
            <nav>
                <ul>
                    <li><a href="../home/index.php">Acceuil</a></li>
                    <li><a href="../person/registre.php">Registre</a></li>
                    <li><a href="../docs/docs.php">Membre</a></li>
                    <li><a href="../docs/arbre.php">Arbre</a></li>
                    <li><a href="../login/index.php">Se deconnecter</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="stats" style="padding-top:80px;">
        <div class="container">
            <h3 class="stats-heading text-center my-1">
                Enregistrez les membres de votre famille
            </h3>
        </div>
    </section>

    <div style="display:flex; justify-content:center; padding:20px;">
        <div class="card" style="max-width:500px; width:100%; border-radius:var(--card-radius); box-shadow:var(--card-shadow); padding:35px;">
            <?php require_once __DIR__ . '/../config/database.php'; $relation = getPDO(); ?>
            <h2 style="font-size:24px; font-weight:700; color:#333; margin-bottom:20px;">Ajouter un membre</h2>
            <form method="post">
                <div style="margin-bottom:20px;">
                    <label style="font-weight:600; color:#555; font-size:14px; display:block; margin-bottom:5px;">Nom Complet</label>
                    <input type="text" placeholder="Votre Nom" name="nom" required style="width:100%; padding:12px 15px; border:2px solid #e0e0e0; border-radius:10px; font-size:15px; outline:none;">
                </div>
                <div style="margin-bottom:20px;">
                    <label style="font-weight:600; color:#555; font-size:14px; display:block; margin-bottom:5px;">Date de Naissance</label>
                    <input type="date" name="date_de_naissance" required style="width:100%; padding:12px 15px; border:2px solid #e0e0e0; border-radius:10px; font-size:15px; outline:none; color:#666;">
                </div>
                <div style="margin-bottom:20px;">
                    <label style="font-weight:600; color:#555; font-size:14px; display:block; margin-bottom:5px;">Genre</label>
                    <select name="genre" style="width:100%; padding:12px 15px; border:2px solid #e0e0e0; border-radius:10px; font-size:15px; outline:none; background:#fff;">
                        <option>Homme</option>
                        <option>Femme</option>
                    </select>
                </div>
                <input type="submit" value="Enregistrer" class="btn btn-primary" name="save" style="width:100%; padding:14px; background:linear-gradient(135deg,#667eea,#764ba2); border:none; border-radius:10px; font-size:16px; font-weight:700; color:#fff; cursor:pointer;">
            </form>
            <?php include("insertion.php"); ?>
        </div>
    </div>

    </div>
    <footer class="footer bg-dark py-5">
        <div class="footregistre">
        <div class="container grid grid-3">
            <div>
                <h1>ArbreG.
                </h1>
                <p>Copyright &copy; 2022</p>
            </div>
            <nav>
                <ul>
                    <li><a href="../home/index.php">Acceuil</a></li>
                    <li><a href="../person/registre.php">Registre</a></li>
                    <li><a href="../docs/docs.php">Membre</a></li>
                </ul>
            </nav>
            <div class="social">
                
                <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
            </div>
        </div>
        </div>
    </footer>
</body>
</html>