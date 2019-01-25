<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/candidate.php';

if (isset($_POST['insert'])) {
	if (isset($_POST['name']) || isset($_POST['birth']) || isset($_POST['tel']) || isset($_POST['tel2']) || isset($_POST['inscription'])  || isset($_POST['neighborhood']) || isset($_POST['street'])  || isset($_POST['number'])  || isset($_POST['father'])  || isset($_POST['mother'])) {

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


		//$name,$birth,$inscription,$mother,$father,$street,$number,$neighborhood,$tel,$tel2
		insertCandidate($name,$birth,$inscription,$mother,$father,$street,$number,$neighborhood,$tel,$tel2);
		header('location: ../view/index.php');

	}else{
		echo "<h1>Error</h1>";
	}
}