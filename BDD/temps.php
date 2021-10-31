<!DOCTYPE html>

<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="temps.css">
<div class="login">
  <title>S'enregistrer sur le site web</title>
  <h1>Créer un compte</h1>
  <body>
  <form method="post" action="temps.php">
    <p><input type="text" name="email" id="email" placeholder="Adresse Mail" required></p>
    <p><input type="text" name="username" id="username" placeholder="Utilisateur" required></p>
    <p><input type="password" name="password" id="password" placeholder="Mot de passe" required></p>
    <p class="remember_me">
      <label>
        <input type="checkbox" name="remember_me" id="remember_me">
        Se souvenir de moi sur cet ordinateur
      </label>
    </p>
    <p class="submit"><input type="submit" name="formsend" id="formsend" value="Créer son compte"></p>
  </form>
</div>


<?php
    
    /* page: inscription.php */
//connexion à la base de données:
$BDD = array();
$BDD['host'] = "127.0.0.1";
$BDD['username'] = "root";
$BDD['password'] = "root";
$BDD['db'] = "trail";

$mysqli = mysqli_connect($BDD['host'], $BDD['username'], $BDD['password'], $BDD['db']);
if(!$mysqli) {
    echo "Connexion non établie.";
    exit;
    
}


  </body>
</html>
