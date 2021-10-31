<?php
session_start();
if(isset($_POST['nom_utilisateur']) && isset($_POST['prenom_utilisateur']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = 'root';
    $db_name     = 'trail';
    $db_host     = '127.0.0.1';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $nom_utilisateur = mysqli_real_escape_string($db,htmlspecialchars($_POST['nom_utilisateur'])); 
    $prenom_utilisateur = mysqli_real_escape_string($db,htmlspecialchars($_POST['prenom_utilisateur']));
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($nom_utilisateur !== "" && $prenom_utilisateur !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              nom_utilisateur = '".$nom_utilisateur."' and prenom_utilisateur = '".$prenom_utilisateur."' and password = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        echo $count;
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['nom_utilisateur'] = $nom_utilisateur;
           $_SESSION['prenom_utilisateur'] = $prenom_utilisateur;
           header('Location: principale.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }

    
}
else
{
   header('Location: login.html');
}

mysqli_close($db); // fermer la connexion

?>