<?php 

$objetPdo = new PDO("mysql:host=localhost;dbname=sgbd",'root','');

    
    // Le pere
$id_pere = $objetPdo->quote($_POST['pere']);
$select=$objetPdo->query("SELECT * FROM individu WHERE id_individu=$id_pere LIMIT 1");
$membres = $select->fetch(); 
$nom_pere=$membres['nom'];
 
    
    // La mere
$id_mere = $objetPdo->quote($_POST['mere']);
$select=$objetPdo->query("SELECT * FROM individu WHERE id_individu=$id_mere LIMIT 1");
$membres = $select->fetch(); 
$nom_mere=$membres['nom'];

// valeur enfant

$id_enfant = $objetPdo->quote($_POST['enfant']);
$select=$objetPdo->query("SELECT * FROM individu WHERE id_individu=$id_enfant LIMIT 1");
$membres = $select->fetch(); 
$nom_enfant=$membres['nom'];

    
    $pere = $objetPdo->quote($nom_pere);
    $mere = $objetPdo->quote($nom_mere);
    $exe=$objetPdo->query("UPDATE individu SET id_pere=$id_pere,pere=$pere,id_mere=$id_mere,mere=$mere WHERE id_individu=$id_enfant ");
    if($exe){
        echo"réussi";
    }else{
        echo"echoé";
    }
    

header('Location: parent.php');
die();
?>
