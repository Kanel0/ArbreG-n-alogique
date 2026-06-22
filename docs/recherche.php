<?php
session_start();
$objetPdo = new PDO("mysql:host=localhost;dbname=sgbd",'root','');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recherche - ArbreG.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" crossorigin="anonymous" />
    <?php include("../css/utilities.php"); ?>
    <?php include("../css/style.php"); ?>
</head>
<body>
    <div class="navbar">
        <div class="container flex">
            <h1 class="logo">ArbreG.</h1>
            <nav>
                <ul>
                    <li><a href="../home/index.php">Acceuil</a></li>
                    <li><a href="../person/registre.php">Registre</a></li>
                    <li><a href="../docs/docs.php">Membre</a></li>
                    <li><a href="../login/index.php">Se deconnecter</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container" style="margin-top: 50px;">
<?php
          if (isset($_POST['cherch'])){

              $rech=isset($_POST['recherche']) ? $_POST['recherche']:"";
           $rech = '%'.$rech.'%';
           $resP = $objetPdo->prepare('SELECT * FROM individu WHERE nom LIKE :resulte');
           $resP->bindParam(':resulte', $rech);
           $resP->execute();
           $v=$resP->fetchAll();
           if ($v){
               echo "<h2>Resultats de la recherche :</h2><ul>";
               foreach($v as $participant){
                   echo "<li><a href='details.php?numParticipant=".$participant['id_individu']."'>".$participant['nom']."</a></li>";
               }
               echo "</ul>";
           }else{
               echo"<p>Aucun resultat trouve</p>";
           }
          }

?>
        <p><a href="docs.php">Retour a la liste des membres</a></p>
    </div>
</body>
</html>