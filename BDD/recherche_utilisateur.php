
<!DOCTYPE html>

<html lang="fr">

 <html> 
 <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="temps.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
     <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet" />
     
      <link rel="stylesheet" href="videos.html">

<link rel="stylesheet" href="temps.html">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Choisir un coureur</title>
       <a href ="principale.php">
        <button class="button1" type="button">
      Revenir au menu principal
    </button></a>



  <body>


<div class="container">

  <div class="row">

    <div class="col-sm-0 col-md-2 col-lg-3"></div>
    <div class="col-sm-12 col-md-8 col-lg-6">
      <h1 class="h1">Voir les videos des coureurs</h1> </div>


<div class="topnav">

  <div class="search-container">
    
      <input type="text" placeholder="Rechercher les videos des coureurs" name="search">
      <button type="submit" class="fa fa-search"></button>
    </form>
  </div>
</div>

<div style="padding-left:16px">

	<?php
  session_start();
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
   
//$result = mysqli_query($mysqli,"SELECT * FROM videos");
$search = ($_POST['nom_utilisateur']);
//echo "$search";
$result = mysqli_query($mysqli,"SELECT coureur.id_coureur,temps_intermediaires.Temps FROM temps_intermediaires,coureur WHERE coureur.id_coureur=temps_intermediaires.id_coureur and coureur.nom_coureur ='".$search."'");

while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
   //printf("ID : %s  Nom : %s\n", $row[0], $row[1]);
$nom = str_replace(":","",$row[1]);

echo "<video controls width='1080'><source src='videos/$row[0]_$nom.mp4' type='video/mp4'></videos>";

}
mysqli_free_result($result);

   /* $array = array("videos" => "nomfichier");
    print_r(array_values($array)); */


   /* $reponse = $BDD->$array('SELECT * FROM videos'); */

// On affiche chaque entrée une à une
/*while ($donnees = $reponse->fetch())

echo $donnees['nomfichier']; */

?>






</body>


</html>

 
