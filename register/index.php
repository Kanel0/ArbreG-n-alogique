<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription - ArbreG.</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="../css/utilities.php">
  <link rel="stylesheet" href="../css/style.php">
</head>
<body style="background: var(--gradient-3); min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px;">

  <?php require_once __DIR__ . '/../config/database.php'; $relation = getPDO(); ?>

  <div class="form-card">
    <div style="text-align:center; margin-bottom:32px;">
      <h1 style="font-size:28px; font-weight:800; background:var(--gradient-1); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">ArbreG.</h1>
      <p class="subtitle">Créez votre compte pour commencer</p>
    </div>

    <form action="" method="post" name="form1">
      <div class="form-group">
        <label>Nom</label>
        <input type="text" placeholder="Votre nom" name="nom" required>
      </div>
      <div class="form-group">
        <label>Age</label>
        <input type="text" placeholder="Votre age" name="age" required>
      </div>
      <div class="form-group">
        <label>Genre</label>
        <select name="genre">
          <option>Homme</option>
          <option>Femme</option>
        </select>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" placeholder="Votre email" name="email" required>
      </div>
      <div class="form-group">
        <label>Mot de passe</label>
        <input type="password" placeholder="Votre mot de passe" name="motdepass" required>
      </div>
      <div class="form-group">
        <label>Confirmer le mot de passe</label>
        <input type="password" placeholder="Confirmez votre mot de passe" name="confirmpass" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block" name="submit">Creer mon compte</button>
    </form>

    <div class="form-divider">ou</div>

    <div style="text-align:center;">
      <p style="color:var(--gray-500); font-size:14px;">Deja un compte ?</p>
      <a href="../login/index.php" style="color:var(--primary); font-weight:600; font-size:14px; display:inline-block; margin-top:8px;">Se connecter</a>
    </div>
  </div>

  <?php include("insertion.php"); ?>
</body>
</html>