<?php

$objetPdo = new PDO("mysql:host=localhost;dbname=sgbd",'root','');

$pdoStat = $objetPdo->prepare("SELECT * FROM individu ORDER BY nom ASC;");

$executeIsOK = $pdoStat->execute();

$participants = $pdoStat->fetchAll();



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
  height:420px;
        
    }
    </style>
    <div class="showcase-form card">
                <h2>Décés</h2>
                
                 <form action="backdece.php" method="POST">
                 
                    <div class="form-control">
                    <label >Individu :</label>
                    <?php                $select= $objetPdo->query("SELECT nom,id_individu FROM individu ");
                                             $membres=$select->fetchAll();?>
                                             <select  name="conjoint" class="select"  value="" required>
                                             <?php  foreach($membres as $membre):?>
                                                   
                      
                     
                            <option value="<?= $membre['id_individu'] ;?>"><?=$membre['nom']?></option>
                            <?php endforeach;?>
                         </select>
                    </div>
                   
                    <div class="form-control">
                    <label >Date de décés :</label>
                        <input type="date" name="date_dece"  required>
                    </div>
    
                  
                    <input type="submit" value="Aujouter" class="btn btn-primary" name="save" onClick="return confirm('Êtes-vous sûre ?')">
                </form>
    <script src="assets/js/bootstrap.js"></script>
<div class="cards1">

</div>

</body>
</html>