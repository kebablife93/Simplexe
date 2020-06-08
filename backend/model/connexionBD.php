<?php
	$hostname = "localhost";
	$base= "SimplexBD";
	$loginBD= "root";
	$passBD="";
	
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=simplexbd;charset=utf8', 'root', '');
	//$pdo = new PDO ("mysql:server=$hostname; dbname=$base", "$loginBD", "$passBD");
}
catch (PDOException $exception) {
echo utf8_encode("Echec de connexion : " . $e->getMessage() . "\n");
die();
 
}