<?php 

require_once __DIR__ . '/../config/database.php';
$objetPdo = getPDO();

if(isset($_POST['save'])){
    $tab_dece = explode("-", $_POST["date_dece"]);
    $nb_tab_dece = count($tab_dece);
    $annee_dece = $tab_dece[0];
   
    // conjoint();
$id1 = $objetPdo->quote($_POST['conjoint']);
$select=$objetPdo->query("SELECT * FROM individu WHERE id_individu=$id1 LIMIT 1");
$membres = $select->fetch(); 
$date_naissance=$membres['date_de_naissance'];
$tab_naissance = explode("-", $date_naissance);
    $nb_tab_naissance = count($tab_naissance);
    $annee_naissance = $tab_naissance[0];
 $age= $annee_dece - $annee_naissance;
 $datedece = $objetPdo->quote($_POST['date_dece']);
 $agedece = $objetPdo->quote($age);
   
    $objetPdo->query("UPDATE individu SET dece=$datedece,age=$agedece WHERE id_individu=$id1  ");
   
  
    
   

header('Location: dece.php');
die();
}
?>