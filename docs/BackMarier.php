<?php 

require_once __DIR__ . '/../config/database.php';
$objetPdo = getPDO();

    
    // conjoint();
$id1 = $objetPdo->quote($_POST['conjoint']);
$select=$objetPdo->query("SELECT * FROM individu WHERE id_individu=$id1 LIMIT 1");
$membres = $select->fetch(); 
$nomconjoint=$membres['nom'];
 
    
    // conjointe();
$id2 = $objetPdo->quote($_POST['conjointe']);
$select=$objetPdo->query("SELECT * FROM individu WHERE id_individu=$id2 LIMIT 1");
$membres = $select->fetch(); 
$nomconjointe=$membres['nom'];





    
    $datemariage = $objetPdo->quote($_POST['date_mariage']);
    $partenaire1 = $objetPdo->quote($nomconjoint);
    $partenaire2 = $objetPdo->quote($nomconjointe);
    $objetPdo->query("UPDATE individu SET id_partenaire=$id2,partenaire=$partenaire2, date_mariage=$datemariage WHERE id_individu=$id1  ");
    $objetPdo->query("UPDATE individu SET id_partenaire=$id1,partenaire=$partenaire1, date_mariage=$datemariage WHERE id_individu=$id2  ");
  
    
   

header('Location: mariage.php');
die();
?>
