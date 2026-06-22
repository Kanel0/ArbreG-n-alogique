
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

    <!-- Head -->

    <section class="docs-head bg-primary py-3">
        
    </section>

   
    <!-- Showcase -->
    <section class="showcase">
        <div class="container grid">
            <div class="showcase-text">
                <h1>Famille Unie</h1>
                <p>Ce site vous aide à trouver votre racine et de faire animée la racine de votre famille </p>
                <a href="../features/features.php" class="btn btn-outline">Savoir Plus</a>
            </div>
<?php
      
    require_once __DIR__ . '/../config/database.php';
    $relation = getPDO();
  ?>
          <div class="showcase-form card">
                <h2>Information</h2>
                
                 <form method="post">
                    
                    <div class="form-control">
                    <label for="nom">Nom Complet:</label>
                        <input type="text" placeholder="Votre Nom" name="nom" required>
                    </div>
                    
                    <div class="form-control">
                    <label for="date_de_naissance">Date de Naissance :</label>
                        <input type="date" name="date_de_naissance"  required>
                    </div>
                      <div class="form-control">
                      <label for="genre">Genre : </label>
                        <select class="select" name="genre">
                            <option>Homme</option>
                            <option>Femme</option>
                        
                        </select>
                    </div>
                    <input type="submit" value="enregistrer" class="btn btn-primary" name="save">
                </form>
                <?php
                    include("insertion.php");
                ?>
            </div>
        </div>
    </section>
   
    <div class="cards1">

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