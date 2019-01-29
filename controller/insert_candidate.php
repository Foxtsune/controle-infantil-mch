<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/candidates.php';

$success = "Success";
$error = "Error";

if (isset($_POST['insert'])) {
	if (!isset($_POST['name']) || !isset($_POST['birth']) || !isset($_POST['tel']) || !isset($_POST['tel2']) || !isset($_POST['inscription'])  || !isset($_POST['neighborhood']) || !isset($_POST['street'])  || !isset($_POST['number'])  || !isset($_POST['father'])  || !isset($_POST['mother'])) {

		$data = array('msg' => 'Campos Inválidos preecha novamente.', 'type' => $error);
		$_SESSION['data'] = $data;
		header('location: '. myURL(). 'view/new_candidate.php');
		exit;

	}else{

		$name = $_POST['name'];
		$birth = $_POST['birth'];
		$tel =  numberTransform($_POST['tel']);
		$tel2 =  numberTransform($_POST['tel2']);
		$inscription =  $_POST['inscription'];
		$neighborhood = $_POST['neighborhood'];
		$street =  $_POST['street'];
		$number = $_POST['number'];
		$father = $_POST['father'];
		$mother =  $_POST['mother'];


		//$name,$birth,$inscription,$mother,$father,$street,$number,$neighborhood,$tel,$tel2
		insertCandidates($name,$birth,$inscription,$mother,$father,$street,$number,$neighborhood,$tel,$tel2);
		$data = array('msg' => 'Candidato cadastrado com sucesso.', 'type' => $success);
		    	$_SESSION['data'] = $data;
		header('location: ../view/index.php');
		exit;
	}
}