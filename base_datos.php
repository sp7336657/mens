<?php


 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD','');
 define('DB_NAME', 'login_mens');


 $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false) {
	die("ERROR EN LA CONEXION" . mysqli_connect_error());
}


?>
