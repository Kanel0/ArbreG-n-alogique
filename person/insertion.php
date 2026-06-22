<?php
require_once __DIR__ . '/../config/database.php';
$relation = getPDO();
// $age = $annee_naissance - 
// $naissance1 = strstr($date_de_naissance, '/', '-');
// $naissance = date('Y-m-d', strtotime($naissance1));
        if(isset($_POST['save'])){
            $tab_naissance = explode("-", $_POST["date_de_naissance"]);
            $nb_tab_naissance = count($tab_naissance);
            $annee_naissance = $tab_naissance[0];
            $annee_actuelle = date("Y");
            $age = $annee_actuelle - $annee_naissance;

            $insertion = $relation->prepare("INSERT INTO individu(nom, date_de_naissance, age, genre) 
            VALUES (:nom,:date_de_naissance,:age,:genre)");
            $insertion->bindParam(':nom',$_POST["nom"]);
            $insertion->bindParam(':date_de_naissance',$_POST["date_de_naissance"]);
            $insertion->bindParam(':age',$age);
            $insertion->bindParam(':genre', $_POST["genre"]);
            $insertion->execute();
            ?>
                <script>
                alert("insertion réussite")
                </script>
                <?php
        
        }  
?>