<?php

function insertToken($token, $idUser){
	require("model/connexionBD.php");

	$req = $pdo->prepare("INSERT INTO TOKEN (token, idUser) VALUES (:token, :idUser)");

	try{
		$req->bindParam(':token', $token);
		$req->bindParam(':idUser', $idUser);
		$bool= $req->execute();

		if($bool){
			return true;
		}else{
			return false;
		}
	}catch (PDOException $e){
		echo utf8_encode("Echec : " . $e->getMessage() . "\n");
		die();
	}
}

?>