<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="principale.css">
        <link rel="stylesheet" href="login.php">
        <link rel="stylesheet" href="register.php">
        <link rel="stylesheet" href="config.php">
        <link rel="stylesheet" media="screen and (max-width: 1280)" href="principale.css" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap"
        rel="stylesheet">

        
        <a href ="register.html">
        <button class="button1" type="button" disabled="disabled">
        
        <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
            
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:Trail.html");
                   }
                }
                else if($_SESSION['nom_utilisateur'] !== "" && $_SESSION['prenom_utilisateur'] !== ""){
                    $nom_utilisateur = $_SESSION['nom_utilisateur'];
                    $prenom_utilisateur = $_SESSION['prenom_utilisateur'];
                    // afficher un message
                    echo "<br>Bonjour $nom_utilisateur $prenom_utilisateur, vous êtes connecté(e)s";
                }
            ?>
        </button></a>

       
        <title>Projet Trail BTS SNIR2 2020-2021</title>
        <img class="snir2" src="images/snir2_logo.png"/>
        <img class="dhuoda" src="images/dhuoda.png"/>
                <h1>Projet Trail 2020-2021</h1>
        <h2> BTS SNIR2 </h2>
    </head>
    <body>


        <center>
            <table>
    <tbody class="presentation">
        <tr class="text">
            <td><div>Vidéos</div> </td>
            <td><div>Temps des coureurs</div></td>
        </tr>
          
            <td><div>
                <a href="videos.html"> <img class="photo" src="images/photo.png"/>
            </div></td>

            <td><div>
                <a href="temps.html"><img class="chrono" src="images/chrono.png"/>
            </div></td>
        </tr>
    </tbody>
</table>
</center>
    </body>
</html>