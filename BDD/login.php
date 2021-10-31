<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
<div class="login">
  <title>Se connecter au site web</title>
  <h1>Connectez-vous à votre compte</h1>
  <body>
  <form method="POST" action="verification.php">
    <p><input type="text" name="nom_utilisateur" value="" placeholder="Nom de l'utilisateur"></p>
    <p><input type="text" name="prenom_utilisateur" value="" placeholder="Prenom de l'utilisateur"></p>
    <p><input type="password" name="password" value="" placeholder="Mot de passe"></p>
    <p class="remember_me">
      <label>
        <input type="checkbox" name="remember_me" id="remember_me">
        Se souvenir de moi sur cet ordinateur
      </label>
    </p>
    <p class="submit"><input type="submit" name="commit" value="Se connecter"></p>
     
        <div>
     <?php
                
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2) 
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
        </div>

  </form>
</div>

<div class="login-help">
  <p>Mot de passe oublié? <a href="#">Cliquez ici pour le réinitialiser</a>.</p>
</div>

  </body>
</html>
