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
<body style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height:100vh; display:flex; align-items:center; justify-content:center; padding:20px;">
  <?php require_once __DIR__ . '/../config/database.php'; $relation = getPDO(); ?>
  <div class="card" style="max-width:460px; width:100%; padding:40px; border-radius:20px; box-shadow:0 20px 60px rgba(0,0,0,0.3);">
    <div style="text-align:center; margin-bottom:30px;">
      <h1 style="font-size:28px; font-weight:700; color:#333; margin:0;">Creer un compte</h1>
      <p style="color:#888; margin-top:8px;">ArbreG. pour vous aider a decouvrir votre famille</p>
    </div>
    <form action="" method="post" name="form1" style="display:flex; flex-direction:column; gap:15px;">
      <div>
        <label style="font-weight:600; color:#555; font-size:14px; display:block; margin-bottom:4px;">Nom</label>
        <input type="text" placeholder="Votre nom" name="nom" style="width:100%; padding:12px 15px; border:2px solid #e0e0e0; border-radius:10px; font-size:15px; outline:none;">
      </div>
      <div>
        <label style="font-weight:600; color:#555; font-size:14px; display:block; margin-bottom:4px;">Age</label>
        <input type="text" placeholder="Votre age" name="age" style="width:100%; padding:12px 15px; border:2px solid #e0e0e0; border-radius:10px; font-size:15px; outline:none;">
      </div>
      <div>
        <label style="font-weight:600; color:#555; font-size:14px; display:block; margin-bottom:4px;">Genre</label>
        <select name="genre" style="width:100%; padding:12px 15px; border:2px solid #e0e0e0; border-radius:10px; font-size:15px; outline:none; background:#fff;">
          <option value="">Selectionner</option>
          <option>Homme</option>
          <option>Femme</option>
        </select>
      </div>
      <div>
        <label style="font-weight:600; color:#555; font-size:14px; display:block; margin-bottom:4px;">Email</label>
        <input type="text" placeholder="Votre email" name="email" style="width:100%; padding:12px 15px; border:2px solid #e0e0e0; border-radius:10px; font-size:15px; outline:none;">
      </div>
      <div>
        <label style="font-weight:600; color:#555; font-size:14px; display:block; margin-bottom:4px;">Mot de passe</label>
        <input type="password" placeholder="Mot de passe" name="motdepass" style="width:100%; padding:12px 15px; border:2px solid #e0e0e0; border-radius:10px; font-size:15px; outline:none;">
      </div>
      <div>
        <label style="font-weight:600; color:#555; font-size:14px; display:block; margin-bottom:4px;">Confirmer le mot de passe</label>
        <input type="password" placeholder="Confirmer votre mot de passe" name="confirmpass" style="width:100%; padding:12px 15px; border:2px solid #e0e0e0; border-radius:10px; font-size:15px; outline:none;">
      </div>
      <input type="submit" value="S'authentifier" name="submit" style="width:100%; padding:14px; background:linear-gradient(135deg,#667eea,#764ba2); color:#fff; border:none; border-radius:10px; font-size:16px; font-weight:700; cursor:pointer; margin-top:5px;">
    </form>
    <div style="text-align:center; margin-top:20px; padding-top:20px; border-top:1px solid #f0f0f0;">
      <p style="color:#999; font-size:14px;">Deja un compte ?</p>
      <a href="../login/index.php" style="display:inline-block; margin-top:8px; color:#667eea; font-weight:600; text-decoration:none;">Se connecter</a>
    </div>
  </div>
  <?php include("insertion.php"); ?>
</body>
</html>
