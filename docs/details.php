<?php

    try{
        $objetPdo = new PDO("mysql:host=localhost;dbname=sgbd",'root','');
        
    }
    catch(PDOException $e){
        echo "Connexion à la base impossible...";
    }
    
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
label{
    font-size:30px;
}
</style>
                       
                  <h1><?= $participant["nom"] ?></h1>
                    <label >Genre:</label>
                    <p><?= $participant["genre"] ?></p>
                    <label >date de naissance:</label>
                    <p><?= $participant["date_de_naissance"] ?></p>
                    <label >Age:</label>
                    <p><?= $participant["age"] ?></p>
                    <label >Partenaire:</label>
                    <p><?= $participant["partenaire"] ?></p>
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