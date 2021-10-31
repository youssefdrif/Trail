
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
      <h1 class="h1">Voir les temps des coureurs</h1> </div>




<div class="recherche2">

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

$search = ($_POST['nom_utilisateur']);
echo "$search";
$result = mysqli_query($mysqli,"SELECT coureur.nom_coureur,coureur.prenom_coureur,temps_intermediaires.Temps FROM temps_intermediaires,coureur WHERE coureur.id_coureur=temps_intermediaires.id_coureur and coureur.nom_coureur ='".$search."'");

echo "<table>
 <tbody>
    <tr><td>Nom</td><td>Prenom</td><td>Temps</td></tr>";
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
       
     echo " <tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
       
       // printf("Nom : %s  Prenom : %s Temps : %s\n", $row[0], $row[1],$row[2]);


    }
   echo "</tbody>
</table> ";


mysqli_free_result($result);
 
  

?>






</body>


</html>

 
