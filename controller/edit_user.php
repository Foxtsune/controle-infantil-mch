<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/users.php';

$error = "Erro";
$success = "Sucesso";

function loadUserUpdate($id){
	return getUserById($id);
}

if (isset($_POST['psw'])) {
	
	$id = $_POST['id_psw'];
	$psw_now = md5($_POST['psw-now']);
	$psw_new = md5($_POST['psw-new']);
	$psw_conf = md5($_POST['psw-conf']);

	$user = getUserById($id);
	/*echo $user->password;
	exit;*/

	if ($user->password != $psw_now) {// Test if  current psw is correct
		$_SESSION['data'] = array('msg' => 'A senha atual está incorreta.', 'type' => $error); 
		header('location: '. myURL(). 'view/edit_user.php');
		exit;
	} else {
		if ($psw_new != $psw_conf) { // Test if  new psw corresponds to the confirmation
			$_SESSION['data'] = array('msg' => 'As senhas não coincidem.', 'type' => $error); 
			header('location: '. myURL(). 'view/edit_user.php');
			exit;
		}
		try {
			updatePassword($id,$psw_new);
			$_SESSION['data'] = array('msg' => 'Senha alterada com sucesso.', 'type' => $success); 
			header('location: '. myURL(). 'view/index.php');
			exit;	
		} catch (Exception $e) {
			$_SESSION['data'] = array('msg' => $e, 'type' => $error); 
			header('location: '. myURL(). 'view/index.php');
			exit;
		}
	}
}

if (isset($_POST['edit'])) {

	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (!isset($_POST['admin'])) {
		$admin = 0;
	} else {
		$admin = $_POST['admin'];
	}

	try {
		updateUser($id,$name,$email,$admin);
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