<?php 
session_start();

	$msg='';

	$action = $_GET['action'];



	switch($action){
		case "registration":
			require ('./controler/User.php');
			break; 

		case "connexion":
			require ('./controler/User.php'); 
			break;

		case "deconnexion":
			require ('./controler/User.php'); 
			break;
	} 
	
	$msg=$action ();
	echo($msg);

?>


  