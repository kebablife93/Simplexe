<?php 
require('./model/user_bd.php');

function registration(){

    $json = file_get_contents('php://input');
    $data = json_decode($json,true);

    $name = $data['username'];
    $psw = $data['password'];

    if(username_exist($name)==false){
        user_insertion($name,$psw);
        http_response_code(200);

        $array = array (
            'username' => $name,
            'message' => "Inscrit avec succès"
        ); 
        $json_token = json_encode($array);

        http_response_code(201);
        return $json_token;
    }else{
        $message = 'Désolé ce pseudo est déjà pris..';
        $json_token = json_encode($message);
        http_response_code(422);
        return $json_token;
    }
}

function connexion(){
    require('./controler/Token.php');

    $json = file_get_contents('php://input');
    $data = json_decode($json,true);

    $name = $data['username'];
    $psw = $data['password'];

    if(user_verification($name,$psw)){

        $uniq_id = uniqid('', true);
        $array = array (
            'uniq_id' => $uniq_id,
            'exist' => true
        );

        creerToken($uniq_id,$_SESSION['idUser']);

        $json_id = json_encode($array);

        http_response_code(201);
        return $json_id;
    }else{
        $message = "Echec de connexion..";
        $json_id = json_encode($message);
        http_response_code(201);//422
        return $json_id;
    }
}

function deconnexion(){

    $json = file_get_contents('php://input');
    $data = json_decode($json,true);

    $bool = $data['exist'];
    $id = $data['uniq_id'];// à garder ?

    if ( $bool == true ){
        $bool = false;
        $json = json_encode($bool);
        return $json;
    }else{
        $json = json_encode($bool);
        return $json;
    }

    $_SESSION = array();
    session_destroy();
}


?>


