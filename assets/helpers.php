<?php 


/*Abs Path*/
function abspath(){
	return dirname(__DIR__);
}

function myURL(){
	return 'http://localhost/meusite/';
}


/*Checks if the session OK*/
function validateSession(){
	if (!isset($_SESSION['id']) || !isset($_SESSION['username']) /*|| $_SESSION['last_activity'] < time() SESSEION TIMOUT*/) {
		unset($_SESSION['id']);
		unset($_SESSION['username']);
		session_destroy();
		$location = abspath().'view/frontend/login.php';
		header('location: '. myURL(). 'view/frontend/login.php');
		exit;
	}
}

/*Checks if is a system administrator*/
function isAdmin(){
	if (!($_SESSION['id']==1)) {
		header('location: '. myURL(). 'view/backend/home.php');
	}
}


/*Clear all spaces and standardize a string*/
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


/*Return a formated date (Pt-br)*/
function formatDate($string){
    
    $dia_sem= date('w', strtotime($string));

    if($dia_sem == 0){
    $semana = "Domingo";
    }elseif($dia_sem == 1){
    $semana = "Segunda-feira";
    }elseif($dia_sem == 2){
    $semana = "Terça-feira";
    }elseif($dia_sem == 3){
    $semana = "Quarta-feira";
    }elseif($dia_sem == 4){
    $semana = "Quinta-feira";
    }elseif($dia_sem == 5){
    $semana = "Sexta-feira";
    }else{
    $semana = "Sábado";
    }

 	$dia= date('d', strtotime($string));

	$mes_num = date('m', strtotime($string));
 	if($mes_num == 01){
    $mes= "Janeiro";
    }elseif($mes_num == 02){
    $mes = "Fevereiro";
    }elseif($mes_num == 03){
    $mes = "Março";
    }elseif($mes_num == 04){
    $mes = "Abril";
    }elseif($mes_num == 05){
    $mes = "Maio";
    }elseif($mes_num == 06){
    $mes = "Junho";
    }elseif($mes_num == 07){
    $mes = "Julho";
    }elseif($mes_num == "08"){//erro ao utilizar zero a esquerda, use strings ou remova o zero
    $mes = "Agosto";
    }elseif($mes_num == 9){//erro ao utilizar zero a esquerda, use strings ou remova o zero
    $mes = "Setembro";
    }elseif($mes_num == 10){
    $mes = "Outubro";
    }elseif($mes_num == 11){
    $mes = "Novembro";
    }else{
    $mes = "Dezembro";
    }

    $ano = date('Y', strtotime($string));
    $hora = date('H:i', strtotime($string));
 
    return $semana.', '.$dia.' de '.$mes.' de '.$ano.' as '.$hora;
}

/*Activates a modal success or error*/
function triggerModal(){
    if ($_SESSION['data']['type']=="Erro") {
        include_once abspath()."view/template/backend/modalError.php";
    } else if ($_SESSION['data']['type']=="Sucesso") {
        include_once abspath()."view/template/backend/modalSuccess.php";
    } 
    // print_r($_SESSION['data']);
    // unset($_SESSION['data']['type']);
    unset($_SESSION['data']);
}