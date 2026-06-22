<?php

require_once __DIR__ . '/../config/database.php';
$objetPdo = getPDO();

$pdoStat = $objetPdo->prepare("UPDATE individu SET nom=:nom,date_de_naissance=:naissance,age=:age,genre=:genre WHERE id_individu = :numParticipant LIMIT 1;");


$tab_naissance = explode("-", $_POST["date_de_naissance"]);
$nb_tab_naissance = count($tab_naissance);
$annee_naissance = $tab_naissance[0];
$annee_actuelle = date("Y");
$age = $annee_actuelle - $annee_naissance;

$pdoStat->bindParam(':numParticipant', $_POST['numParticipant']);
$pdoStat->bindParam(':nom', $_POST['nom']);
$pdoStat->bindParam(':age', $age);
$pdoStat->bindParam(':naissance', $_POST['date_de_naissance']);
$pdoStat->bindParam(':genre', $_POST['genre']);

$executeIsOK = $pdoStat->execute();

if($executeIsOK){
        header('Location: docs.php');
    exit();
}else{
    echo "<p>La modification à échoué....</p>";
}

?>