<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/candidates.php';

function loadCandidateUpdate($id){
	return getCandidateById($id);	
}

$error = "Erro";
$success = "Sucesso";

if (isset($_POST['edit'])) {

	$id = $_POST['id'];
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
	$contact = $_POST['contact'];
	$destination = $_POST['destination'];
	$situation = $_POST['situation'];

	try {
		updateCandidates($id,$name,$birth,$inscription,$mother,$father,$street,$number,$neighborhood,$tel,$tel2,$contact,$destination,$situation);
		$_SESSION['data'] = array('msg' => 'Candidato editado com sucesso.', 'type' => $success); 
		header('location: '. myURL(). 'view/index.php');
		exit;
	} catch (PDOException $e) {
		$data = array('msg' => 'Erro:'.$e->getMessage(), 'type' => $error);//DEBUG MSG
    	$_SESSION['data'] = $data;
    	header('location: '. myURL(). 'view/index.php');
		exit;
	}
}