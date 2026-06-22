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
<body style="background: var(--gradient-3); min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px;">

  <div class="form-card">
    <div style="text-align:center; margin-bottom:32px;">
      <h1 style="font-size:28px; font-weight:800; background:var(--gradient-1); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">ArbreG.</h1>
      <p class="subtitle">Bienvenue ! Veuillez vous identifier</p>
    </div>

    <form action="" method="POST">
      <div class="form-group">
        <label>Email</label>
        <input type="text" placeholder="Votre email" name="email" required>
      </div>
      <div class="form-group">
        <label>Mot de passe</label>
        <input type="password" placeholder="Votre mot de passe" name="motdepass" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
    </form>

    <div class="form-divider">ou</div>

    <div style="text-align:center;">
      <p style="color:var(--gray-500); font-size:14px;">Pas encore de compte ?</p>
      <a href="../register/index.php" style="color:var(--primary); font-weight:600; font-size:14px; display:inline-block; margin-top:8px;">Créer un compte</a>
    </div>
  </div>

  <?php 
  session_start();
  require_once __DIR__ . '/../config/database.php';
  $relation = getPDO();

  if(!empty($_POST['email']) && !empty($_POST['motdepass'])){
      $select = $relation -> prepare("SELECT email, mot_de_passe FROM admin WHERE email = :emaitso");
      $select -> execute(["emaitso" => $_POST["email"]]);
      $user = $select -> fetch();
      if(!$user){
        echo '<script>alert("Compte inexistant !");</script>';
      } else {
        if(password_verify($_POST["motdepass"], $user['mot_de_passe'])){
          header('location: ../home/index.php');
          exit();
        } else {
          echo '<script>alert("Mot de passe incorrect !");</script>';
        }
      }
  }
  ?>
</body>
</html>