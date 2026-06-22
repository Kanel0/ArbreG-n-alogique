<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST["nom"]) && !empty($_POST["age"]) && !empty($_POST["genre"]) && !empty($_POST["email"])
        && !empty($_POST["motdepass"])){
            if($_POST["motdepass"] == $_POST["confirmpass"]){
                $hash = password_hash($_POST["motdepass"], PASSWORD_BCRYPT);
                $insertion = $relation -> prepare("INSERT INTO admin( `nom`, `age`, `genre`, `email`, 
                `mot_de_passe`) VALUES (:nom, :age, :genre, :email, :mot_de_passe)");
                $insertion -> execute([
                    "nom" => $_POST["nom"],
                    "age" => $_POST["age"],
                    "genre" => $_POST["genre"],
                    "email" => $_POST["email"],
                    "mot_de_passe" => $hash
                ]);
            }else{
                ?>
                    <script>
                        alert("Mot de passe incorrect");
                    </script>
                <?php
            }
        }else{
            ?>
                <script>
                    alert("Veuillez tout remplir");
                </script>
            <?php
        }
    }
?>