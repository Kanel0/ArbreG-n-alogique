<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion - ArbreG.</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="../css/utilities.php">
  <link rel="stylesheet" href="../css/style.php">
</head>
<body style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height:100vh; display:flex; align-items:center; justify-content:center;">
  <div class="card" style="max-width:420px; width:100%; padding:40px; border-radius:20px; box-shadow:0 20px 60px rgba(0,0,0,0.3);">
    <div style="text-align:center; margin-bottom:30px;">
      <h1 style="font-size:32px; font-weight:700; color:#333; margin:0;">ArbreG.</h1>
      <p style="color:#888; margin-top:8px;">Bienvenue ! Veuillez vous identifier</p>
    </div>
    <form action="" method="POST" style="display:flex; flex-direction:column; gap:20px;">
      <div>
        <label style="font-weight:600; color:#555; font-size:14px; display:block; margin-bottom:5px;">Email</label>
        <input type="text" placeholder="Votre Email" name="email" style="width:100%; padding:12px 15px; border:2px solid #e0e0e0; border-radius:10px; font-size:15px; outline:none; transition:border-color 0.2s;" onfocus="this.style.borderColor='#667eea'" onblur="this.style.borderColor='#e0e0e0'">
      </div>
      <div>
        <label style="font-weight:600; color:#555; font-size:14px; display:block; margin-bottom:5px;">Mot de Passe</label>
        <input type="password" placeholder="Mot de Passe" name="motdepass" style="width:100%; padding:12px 15px; border:2px solid #e0e0e0; border-radius:10px; font-size:15px; outline:none; transition:border-color 0.2s;" onfocus="this.style.borderColor='#667eea'" onblur="this.style.borderColor='#e0e0e0'">
      </div>
      <button type="submit" style="width:100%; padding:14px; background:linear-gradient(135deg,#667eea,#764ba2); color:#fff; border:none; border-radius:10px; font-size:16px; font-weight:700; cursor:pointer; transition:transform 0.2s; margin-top:10px;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">Se connecter</button>
    </form>
    
    <div style="text-align:center; margin-top:25px; padding-top:20px; border-top:1px solid #f0f0f0;">
      <p style="color:#999; font-size:14px;">Pas encore de compte ?</p>
      <a href="../register/index.php" style="display:inline-block; margin-top:8px; color:#667eea; font-weight:600; text-decoration:none;">Créer un compte</a>
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
