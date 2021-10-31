 <?php
$BDD = array();
$BDD['host'] = "127.0.0.1";
$BDD['username'] = "root";
$BDD['password'] = "root";
$BDD['db'] = "trail";
	 
	if(isset($_GET['username'], $_GET['key']) AND !empty($_GET['username']) AND !empty($_GET['key'])) {
	   $username = htmlspecialchars(urldecode($_GET['username']));
	   $key = htmlspecialchars($_GET['key']);
	   $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE username = ? AND confirmkey = ?");
	   $requser->execute(array($username, $key));
	   $userexist = $requser->rowCount();
	   if($userexist == 1) {
	      $username = $requser->fetch();
	      if($user['confirme'] == 0) {
	         $updateuser = $bdd->prepare("UPDATE utilisateur SET confirme = 1 WHERE username = ? AND confirmkey = ?");
	         $updateuser->execute(array($username,$key));
	         echo "Votre compte a bien été confirmé !";
	      } else {
	         echo "Votre compte a déjà été confirmé !";
	      }
	   } else {
	      echo "L'utilisateur n'existe pas !";
	   }
	}
	?>