<?php include("connexion.php"); ?>
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
                    <li><a href="index.php">Acceuil</a></li>
                    <li><a href="../person/registre.php">Registre</a></li>
                    <li><a href="../docs/docs.php">Membre</a></li>
                    <li><a href="../docs/arbre.php">Arbre</a></li>
                    <li><a href="../login/index.php">Se deconnecter</a></li>

                </ul>
            </nav>
        </div>
    </div>
    
    
    <!-- Showcase -->
    <section class="showcase">
        <div class="container grid">
            <div class="showcase-text">
                <h1>Famille Unie</h1>
                <p>Ce site vous aide à trouver votre racine et de faire animée la racine de votre famille </p>
                <a href="../features/features.php" class="btn btn-outline">Savoir Plus</a>
            </div>
            
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats">
        <div class="container">
            <h3 class="stats-heading text-center my-1 ">
                Bienvenue sur notre page web et vous devez commencer enregistré tous les génération dans votre famille 
            </h3>
<style>
.services__card{
height:400px;
width:250px;
display: flex;
margin-left:300px;
}
</style>
 <!-- Services Section -->
 <div class="card2">
 <div class="services" id="services">
    <h1>Membre de la  Famille</h1>
    <div class="services__wrapper">
    <div class="car">
      <div class="services__card">
        <h2>Père</h2>
        <p>Ajouter l'information sur le Père de la Famille</p>
        <div class="services__btn"><a href="../docs/docs.php"><button>Voir</button></a></div>
      </div>
      <div class="services__card">
        <h2>Mère</h2>
        <p>Ajouter l'information sur la Mère de la famille</p>
        <div class="services__btn"><a href="../docs/docs.php"><button>Voir</button></a></div>
      </div>
      <div class="services__card">
        <h2>Génération Suivante</h2>
        <p>Ajouter l'information sur des enfants que le Pére et la Mère ont engendré</p>
        <div class="services__btn"><a href="../docs/docs.php"><button>Voir</button></a></div>
      </div>
      <div class="services__card">
        <h2>Marie ou la Femme</h2>
        <p>Marie ou la Femme de la Génération suivante</p>
        <div class="services__btn"><a href="../docs/docs.php"><button> Voir</button></a></div>
      </div>
      <div class="services__card" style="border: 2px solid #6c63ff;">
        <h2>Arbre Généalogique</h2>
        <p>Visualisez l'arbre complet de votre famille</p>
        <div class="services__btn"><a href="../docs/arbre.php"><button style="background:#6c63ff;">Voir l'arbre</button></a></div>
      </div>
    </div>
  </div>
  </div>
  </div>
    </section>

    <!-- Cli -->
    <section class="cli">
        <div class="container grid">
            <img src="../images/famille.webp" alt="">
            <div class="card">
                <img src="../images/Happiness-family.jpg" alt="">
            </div>
            <div class="card">
                <img src="../images/fam.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- Cloud -->
    <section class="cloud bg-primary my-2 py-2">
        <div class="container grid">
            <div class="text-center">
                <h2 class="lg">ArbreG. comme Arbre Généalogique </h2>
                <p class="lead my-1">Savez-vous que des gens pourrait avoir des orgines différentes mais de la même famille?</p>
                <a href="../features/features.php" class="btn btn-dark">Savoir Plus</a>
            </div>
            <img src="../images/logos/Arbre.jpg" alt="">
        </div>
    </section>
      <!-- Footer -->
    <footer class="footer bg-dark py-5">
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
    </footer>
    
</body>
</html>
