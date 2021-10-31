<!DOCTYPE html>

<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="register.css">
<div class="login">
  <title>S'enregistrer sur le site web</title>
  <h1>Créer un compte</h1>
  <body>
  <form method="post" action="register.php">
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

$AfficherFormulaire=1;
//traitement du formulaire:
if(isset($_POST['email_coureur'],$_POST['nom_coureur'],$_POST['prenom_coureur'],$_POST['password'])){
//l'utilisateur à cliqué sur "S'inscrire", on demande donc si les champs sont défini avec "isset"
}



$email = "";
$delai=3;
$url='https://www.3wsport.com';

    /* Validation d'adresses email avec un regex */


 
    if(empty($_POST['nom_coureur'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "<p style='color:red'>Le champ Nom est vide.</p>";
    }  
    elseif(strlen($_POST['nom_coureur'])>25){//le pseudo est trop long, il dépasse 25 caractères
        echo "<p style='color:red'>Le Nom est trop long, il dépasse 25 caractères.</p>";
    }

    elseif(empty($_POST['prenom_coureur'])){//le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "<p style='color:red'>Le champ Prenom est vide.</p>";
    }      
    elseif(strlen($_POST['prenom_coureur'])>25){//le pseudo est trop long, il dépasse 25 caractères
        echo "<p style='color:red'>Le Prenom est trop long, il dépasse 25 caractères.</p>";
    } 
    elseif(empty($_POST['password'])){//le champ mot de passe est vide
        echo "<p style='color:red'>Le champ Mot de passe est vide.</p>";
    } 
    elseif (filter_var($_POST['email_coureur'], FILTER_VALIDATE_EMAIL) == false ) {
     echo "<p style='color:red'>L'adresse email est invalide.</p>";}
    
 

    else {
        //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
        //Bien évidement il s'agit là d'un script simplifié au maximum, libre à vous de rajouter des conditions avant l'enregistrement comme la longueur minimum du mot de passe par exemple
        if(!mysqli_query($mysqli,"INSERT INTO coureur SET email_coureur='".$_POST['email_coureur']."',nom_coureur='".$_POST['nom_coureur']."',prenom_coureur='".$_POST['prenom_coureur']."', password ='".($_POST['password'])."'")){
            echo "<p style='color:red'>Une erreur s'est produite </p>".mysqli_error($mysqli);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
        } else {
            echo "<p style='color:green'>Vous êtes inscrit avec succès!</p>";
            
            //on affiche plus le formulaire
            $AfficherFormulaire=0;
        }

    }
          if ($AfficherFormulaire==0){
             
            


          header('Refresh: '.$delai.';url='.$url);

        }
          /*else*/ 

          exit();
        


    

    ?>
    <!-- 
    Les balises <form> sert à dire que c'est un formulaire
    on lui demande de faire fonctionner la page inscription.php une fois le bouton "S'inscrire" cliqué
    on lui dit également que c'est un formulaire de type "POST"
     
    Les balises <input> sont les champs de formulaire
    type="text" sera du texte
    type="password" sera des petits points noir (texte caché)
    type="submit" sera un bouton pour valider le formulaire
    name="nom de l'input" sert à le reconnaitre une fois le bouton submit cliqué, pour le code PHP
     -->
  

  </body>
</html>
