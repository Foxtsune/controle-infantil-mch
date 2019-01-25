<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/candidate.php';

function loadCandidateUpdate($id){
	return getCandidateById($id);	
}

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
	$contact = $_POST['contact'];;
	$destination = $_POST['destination'];;
	$situation = $_POST['situation'];;

	try {
			updateCandidate($id,$name,$birth,$inscription,$mother,$father,$street,$number,$neighborhood,$tel,$tel2,$contact,$destination,$situation);
			header('location: '. myURL(). 'view/index.php');
			exit;
		} catch (PDOException $e) {
			echo $e->getMessage();
			//$dados = array('msg' => 'Erro:'.$e->getMessage(), 'type' => $erro);
	    	//$_SESSION['data'] = $dados;
	    	//header('location: '. myURL(). 'view/index.php');
			exit;
		}
}