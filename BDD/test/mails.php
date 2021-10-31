<?php
if(isset($_POST['mailform']))
{
$header="MIME-Version: 1.0\r\n";
$header.='From: legenialdu30@gmail.com'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';
$username='legenialdu30@gmail.com';
$password='A4p4P5E9mMs7Yzz7';
$message='
<html>
	<body>
		<div align="center">
			
			<br />
			J\'ai envoyé ce mail avec PHP !
			<br />
			
		</div>
	</body>
</html>
';

ini_set('SMTP','ssl://smtp.gmail.com');
ini_set('smtp_port','587');
ini_set('smtp_user',$username);
ini_set('smtp_pass',$password);
mail("imredzcsgo@gmail.com", "Salut tout le monde !", $message, $header);
}
?>
<form method="POST" action="">
	<input type="submit" value="Recevoir un mail !" name="mailform"/>
</form>