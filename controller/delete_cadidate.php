<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/MeuSite/assets/helpers.php";
include abspath().'model/clientes.php';

if (isset($_GET['id'])) {

	$id = $_GET['id'];

	if (!getCustomerById($id)) {
		//caso passem id inválido via URL
		$dados = array('msg' => 'ID inválido', 'type' => $erro);
		$_SESSION['data'] = $dados;
	  	header("Location:".myURL()."view/backend/gerenciar_clientes.php");
	  	exit;
	}

	try {
		deleteCustomer($id);
		$_SESSION['data'] = array('msg' => "Cliente excluido com sucesso", 'type' => $sucesso); 
		header('location: '. myURL(). 'view/backend/gerenciar_clientes.php');
		exit;
	} catch (PDOException $e) {
		$dados = array('msg' => 'Erro:'.$e->getMessage(), 'type' => $erro);
    	$_SESSION['data'] = $dados;
    	header('location: '. myURL(). 'view/backend/gerenciar_clientes.php');
		exit;
	}
}