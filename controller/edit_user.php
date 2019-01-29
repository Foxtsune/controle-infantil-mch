<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/users.php';

$error = "Error";
$success = "Success";

function loadUserUpdate($id){
	return getUserById($id);
}

if (isset($_POST['edit'])) {

	$id = $_SESSION['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$admin = $_POST['admin'];

	try {
		updateUser($id,$name,$email,$password,$admin);
		$_SESSION['data'] = array('msg' => 'Dados atualizados com sucesso.', 'type' => $success); 
		header('location: '. myURL(). 'view/index.php');
		exit;
	} catch (PDOException $e) {
		$data = array('msg' => 'Erro:'.$e->getMessage(), 'type' => $error);//DEBUG MSG
    	$_SESSION['data'] = $data;
    	header('location: '. myURL(). 'view/index.php');
		exit;
	}
}