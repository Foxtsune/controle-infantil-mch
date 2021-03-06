<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";
include abspath().'/model/candidates.php';

if (isset($_GET['id'])) {

	$id = $_GET['id'];
	$error = "Erro";
	$success = "Sucesso";

	if (!getCandidateById($id)) {
		//caso passem id inválido via URL
		$data = array('msg' => 'ID inválido', 'type' => $error);
		$_SESSION['data'] = $data;
	  	header("Location:".myURL()."view/index.php");
	  	exit;
	}

	try {
		deleteCandidate($id);
		$_SESSION['data'] = array('msg' => "Candidato excluido com sucesso.", 'type' => $success); 
		header('location: '. myURL(). 'view/index.php');
		exit;
	} catch (PDOException $e) {
		$data = array('msg' => 'Error:'.$e->getMessage(), 'type' => $error);
    	$_SESSION['data'] = $data;
    	header('location: '. myURL(). 'view/index.php');
		exit;
	}
}