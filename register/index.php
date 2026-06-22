<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="styles.css">
   <!-- Font Awesome Cdn Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <?php
      
    require_once __DIR__ . '/../config/database.php';
    $relation = getPDO();
  ?>
  <div class="wrapper">
    <h1>Remplissez votre information</h1>
    <p>ArbreG. pour vous aidez   <br> à découvrir votre famille </p>
    <form action="" method="post" name="form1">
        
      <input type="text" placeholder="nom" name="nom">
      <input type="text" placeholder="age" name="age">
      <input type="text" placeholder="genre"name="genre">
      <input type="text" placeholder="email" name="email">
      <input type="text" placeholder="mot de passe" name="motdepass">
      <input type="text" placeholder="Confirmer votre mot de passe" name="confirmpass">
      <input type="submit" value="S'authentifier" name="submit">
    </form>
    <div class="not-member">
      Cliquez ici!<a href="../login/index.php">Si vous voullez annuler</a>
    </div>
    <p class="or">
      ----- Ou Continuer Avec -----
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-instagram"></i>
      <i class="fab fa-facebook"></i>
    </div>
    
  </div>
  <?php include("insertion.php"); ?>
</body>
</html>
