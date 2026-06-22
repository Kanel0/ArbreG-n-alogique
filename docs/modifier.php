<?php

    require_once __DIR__ . '/../config/database.php';
    $objetPdo = getPDO();
    
     $pdoStat = $objetPdo->prepare("SELECT * FROM individu WHERE id_individu = :num;");
    
     $pdoStat->bindValue(':num',$_GET["numParticipant"],PDO::PARAM_INT);

     $executeIsOK = $pdoStat->execute();
    
     $participant = $pdoStat->fetch();
    

?>

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
    <style>
    .showcase-form{
        margin-left:500px;
  
        
    }
    </style>
    <div class="showcase-form card">
                <h2>Modification</h2>
                
                <form method="post" action="BackModification.php">
                <div class="form-control">
                    
                        <input type="hidden" placeholder="ID" name="numParticipant" id="numParticipant" value="<?= $participant["id_individu"]; ?>" required>
                    </div>
                    <div class="form-control">
                    <label for="nom">Nom Complet:</label>
                        <input type="text" placeholder="Votre Nom" name="nom" value="<?= $participant["nom"]; ?>" required>
                    </div>
                    
                    <div class="form-control">
                    <label for="date_de_naissance">Date de Naissance :</label>
                        <input type="date" name="date_de_naissance" value="<?= $participant["date_de_naissance"]; ?>" required>
                    </div>
                      <div class="form-control">
                      <label for="genre">Genre : </label>
                        <select class="select" name="genre" value="<?= $participant["genre"]; ?>">
                            <option>Homme</option>
                            <option>Femme</option>
                        
                        </select>
                    </div>
                    <input type="submit" value="enregistrer" class="btn btn-primary" name="save" onClick="return confirm('voulez-vous vraiment le Modifier?')">
                </form>
            </div>



   
  
    <script src="assets/js/bootstrap.js"></script>
<div class="cards1">

</div>
    <!-- Footer -->
    <footer class="footer bg-dark py-5">
      <div class="footdocs">
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