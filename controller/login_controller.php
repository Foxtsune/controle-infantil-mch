<?php
	session_start();

	require abspath().'/model/users.php';
	

	$error = "Error";
	$success = "Success";

	if(isset($_POST['signed'])) {// vem do formulário login

		$email = $_POST['email'];
		$password = md5($_POST['password']);//CODIFICA-LA DEPOIS!!!!!!!!!!!!!!!!!!!! MD5

		if(!isset($email) || !isset($password)) {
			$dados = array('msg' => 'Todos os campos são necessários', 'type' => $error);
			$_SESSION['data'] = $dados;
		} else {
			$user = login($email,$password);
			if($user != null) {
				$_SESSION['id'] = $user->id;
		  		$_SESSION['name'] = $user->name;
		  		$_SESSION['admin'] = $user->admin;
		  		header('location: index.php');
		  		exit;
			} else {
				$dados = array('msg' => 'Usuário ou senha incorreto!', 'type' => $error);
				$_SESSION['data'] = $dados;
			}
		}
	}

?>