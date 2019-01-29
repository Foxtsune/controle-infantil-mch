<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";
include abspath().'/model/candidates.php';

if (isset($_GET['id'])) {

	$id = $_GET['id'];
	$error = "Error";
	$success = "Success";

	if (!getCandidateById($id)) {
		//caso passem id inválido via URL
		$dados = array('msg' => 'ID inválido', 'type' => $error);
		$_SESSION['data'] = $dados;
	  	header("Location:".myURL()."view/index.php");
	  	exit;
	}

	try {
		deleteCandidate($id);
		$_SESSION['data'] = array('msg' => "Candidato excluido com sucesso", 'type' => $success); 
		header('location: '. myURL(). 'view/index.php');
		exit;
	} catch (PDOException $e) {
		$dados = array('msg' => 'Error:'.$e->getMessage(), 'type' => $error);
    	$_SESSION['data'] = $dados;
    	header('location: '. myURL(). 'view/index.php');
		exit;
	}
}