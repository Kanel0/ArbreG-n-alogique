<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ArbG.</title>
  <link rel="stylesheet" href="style.css">
   <!-- Font Awesome Cdn Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <h1>Bonjour à Vous !</h1>
    <p>Bienvenue sur ArbreG. <br> Veuillez-Vous indentifier!</p>
    <form action="" method="POST">
      <input type="text" placeholder="Votre Email" name="email">
      <input type="password" placeholder="Mot de Passe" name="motdepass">
      <button type="submit">Se connecter </button> 
    </form>
    
    <p class="or">
      ----- Ou se connecter avec -----
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-instagram"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="not-member">
      Cliquez ici!<a href="../register/index.php">Si vous n'avez pas encore une compte</a>
    </div>
  </div>
  <?php 
session_start();
require_once __DIR__ . '/../config/database.php';
$relation = getPDO();
// mysqli_connect($host,$user,$password);
// mysqli_select_db($db);

if(!empty($_POST['email']) && !empty($_POST['motdepass'])){
      $select = $relation -> prepare("SELECT email, mot_de_passe FROM admin WHERE email = :emaitso");
    $select -> execute([
      "emaitso" => $_POST["email"]
    ]);
    $user = $select -> fetch();
    if(!$user){
      ?>
      <script>
          alert("Compte inéxistant !");
      </script>
  <?php
    }else{
      if(password_verify($_POST["motdepass"], $user['mot_de_passe'])){
        header('location: ../home/index.php');
        exit();
      }else{
        ?>
        <script>
            alert("Mot de passe incorrect !");
        </script>
    <?php
      }
    }
    
    // $email=$_POST['email'];
    // $password=$_POST['motdepass'];
    
    // $sql="select * from admin where email='".$email."'AND mot_de_pass='".$password."' limit 1";
    
    // $result=mysqli_query($sql);
    
    // if(mysql_num_rows($result)==1){
    //   header('location: ../home/index.php');
    //     exit();
    // }
    // else{
    //     echo " You Have Entered Incorrect Password";
    //     exit();
    // }
        
}
?>
</body>
</html>
