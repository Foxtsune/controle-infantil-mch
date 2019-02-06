<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/users.php';

$error = "Erro";
$success = "Sucesso";

if (isset($_POST['insert'])) {
	if (!isset($_POST['name']) || !isset($_POST['email'])) {

		$data = array('msg' => 'Campos Inválidos preecha novamente.', 'type' => $error);
		$_SESSION['data'] = $data;
		header('location: '. myURL(). 'view/new_user.php');
		exit;

	}else{

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = md5(123);//Senha padrão

		insertUser($name,$email,$password);
		$data = array('msg' => 'Usuário cadastrado com sucesso.', 'type' => $success);
		    	$_SESSION['data'] = $data;
		header('location: ../view/users.php');
		exit;
	}
} else{

}