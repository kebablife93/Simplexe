<?php
require('./model/token_bd.php');

function creerToken($token, $idUser){

	insertToken($token, $idUser);
}

?>