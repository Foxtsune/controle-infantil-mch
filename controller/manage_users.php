<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/users.php';

$error = "Erro";
$success = "Sucesso";

function loadAllUsers(){
	return getAllUsers();
}
