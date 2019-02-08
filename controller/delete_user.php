<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";
include abspath().'/model/users.php';

if (isset($_GET['id'])) {

	$id = $_GET['id'];
	$error = "Erro";
	$success = "Sucesso";

	if (!getUserById($id)) {
		//caso passem id inválido via URL
		$data = array('msg' => 'ID inválido', 'type' => $error);
		$_SESSION['data'] = $data;
	  	header("Location:".myURL()."view/users.php");
	  	exit;
	}

	try {
		deleteUser($id);
		$_SESSION['data'] = array('msg' => "Usuário excluido com sucesso.", 'type' => $success); 
		header('location: '. myURL(). 'view/users.php');
		exit;
	} catch (PDOException $e) {
		$data = array('msg' => 'Error:'.$e->getMessage(), 'type' => $error);
    	$_SESSION['data'] = $data;
    	header('location: '. myURL(). 'view/users.php');
		exit;
	}
}