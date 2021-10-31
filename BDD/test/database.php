<? php

define('HOST','localhost');
define('DB_NAME','trail');
define('USER','root');
define('PASS','');

try {
 $db = new PDO("mysql:host=" . HOST . ";dbname="trail"" . DB_NAME, USER, PASS);
 $db=setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "Connection > OK !";
} catch(PDOException $e){
	echo $e;
}
?>