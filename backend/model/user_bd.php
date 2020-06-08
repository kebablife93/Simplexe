<?php

function user_insertion($name, $psw){
	require("model/connexionBD.php");

	$req = $pdo->prepare('INSERT INTO USER(userName, userPassword) VALUES(:userName, :userPassword)');
	//utiliser un password_hash OU crypto
	$req->execute(array(
	'userName' => $name,
	'userPassword' => $psw,
	));
}

function user_verification($name,$psw){
	require("model/connexionBD.php");

	$req = $pdo->prepare("SELECT * FROM USER WHERE userName=? and userPassword=?");
	$resultat = array();
	//utiliser un password_verify

	try{
		$data = $req->execute([$name,$psw]);	

		if($data){
			$resultat = $req->fetchAll(PDO::FETCH_ASSOC);
		}

		if(count($resultat) == 0){
			return false;
		}else{
			$_SESSION['idUser'] = $resultat[0]['idUser'];
			return true;
		}
	}catch (PDOException $e){
		echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
		die();
	}
}

function username_exist($name){
	require("model/connexionBD.php");

	$req = $pdo->prepare("SELECT * FROM USER WHERE userName=?");
	$resultat = array();

	try{
		$data = $req->execute([$name]);	

		if($data){
			$resultat = $req->fetchAll(PDO::FETCH_ASSOC);
		}

		if(count($resultat) == 0){
			return false;
		}else{
			return true;
		}
	}catch (PDOException $e){
		echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
		die();
	}
}

function getUser($token){
	require("model/connexionBD.php");

	$req = $pdo->prepare("SELECT * FROM USER U, TOKEN T WHERE T.token=:token AND T.idUser=U.idUser");
	$resultat = array();

	try{
		$req->bindParam(':token', $token);
		$data = $req->execute();	

		if($data){
			$resultat = $req->fetchAll(PDO::FETCH_ASSOC);
		}
		if(count($resultat) == 0){
			return false;
		}else{
			return $resultat[0]['idUser'];;
		}
	}catch (PDOException $e){
		echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
		die();
	}
}



?>