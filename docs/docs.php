<?php

require_once __DIR__ . '/../config/database.php';
$objetPdo = getPDO();

$pdoStat = $objetPdo->prepare("SELECT * FROM individu ORDER BY nom ASC;");

$executeIsOK = $pdoStat->execute();

$participants = $pdoStat->fetchAll();



?>

<?php
         
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
    <div class="card2">
        <div style="display:flex; align-items:center; gap:15px; flex-wrap:wrap; margin-bottom:20px;">
            <form action="recherche.php" method="post" style="display:flex; gap:10px; align-items:center;">
                <input type="search" name="recherche" placeholder="Nom Complet">
                <input type="submit" value="Rechercher" name="cherch">
            </form>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom Complet</th>
                        <th>Genre</th>
                        <th>Date de Naissance</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($participants as $participant): ?>
                    <tr>
                        <td><?= $participant["id_individu"] ?></td>
                        <td><strong><?= $participant["nom"] ?></strong></td>
                        <td><?= $participant["genre"] ?></td>
                        <td><?= $participant["date_de_naissance"] ?></td>
                        <td><?= $participant["age"] ?></td>
                        <td style="white-space:nowrap;">
                            <a href="modifier.php?numParticipant=<?= $participant['id_individu']?>" onClick="return confirm('Voulez-vous vraiment le modifier?')">
                                <button class="btn btn-danger">Modifier</button>
                            </a>
                            <a href="Suppression.php?numParticipant=<?= $participant['id_individu']?>" onClick="return confirm('Voulez-vous vraiment le supprimer?')">
                                <button class="btn btn-danger">Supprimer</button>
                            </a>
                            <a href="details.php?numParticipant=<?= $participant['id_individu']?>">
                                <button class="btn btn-danger">Details</button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card2" style="margin-top:10px;">
        <div style="display:flex; flex-wrap:wrap; gap:12px; justify-content:center;">
            <a href="enfant.php" style="padding:14px 28px; background:linear-gradient(135deg,#667eea,#764ba2); color:#fff; border-radius:10px; font-weight:600; transition:all 0.3s;">+ Enfant</a>
            <a href="adulte.php" style="padding:14px 28px; background:linear-gradient(135deg,#a6ffcb,#12d8fa); color:#1a1a2e; border-radius:10px; font-weight:600; transition:all 0.3s;">+ Adulte</a>
            <a href="parent.php" style="padding:14px 28px; background:linear-gradient(135deg,#231557,#ff1361); color:#fff; border-radius:10px; font-weight:600; transition:all 0.3s;">+ Parent</a>
            <a href="mariage.php" style="padding:14px 28px; background:linear-gradient(135deg,#f093fb,#f5576c); color:#fff; border-radius:10px; font-weight:600; transition:all 0.3s;">+ Mariage</a>
            <a href="dece.php" style="padding:14px 28px; background:linear-gradient(135deg,#4facfe,#00f2fe); color:#1a1a2e; border-radius:10px; font-weight:600; transition:all 0.3s;">+ Decès</a>
            <a href="arbre.php" style="padding:14px 28px; background:linear-gradient(135deg,#667eea,#764ba2); color:#fff; border-radius:10px; font-weight:600; transition:all 0.3s;">Arbre</a>
        </div>
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