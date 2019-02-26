<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/candidates.php';



function getCategories(){
	$age = "-6 year";
	if (isset($_GET['search'])) {
		$end_date = $_GET['date'];
		$inf = $_GET['inf'];
		return getInterval($age,$end_date);
	}else{
		$end_date = date("Y")."-03-31";
		return getInterval($age,$end_date);
	}
}


// Returns interval between years of candidate
function getInterval(String $years,$end_date){
	$parsed_date = strtotime($end_date);
	$start_date = strtotime($years,$parsed_date);
	$start_date = date("Y-m-d",$start_date);
	$result = getCategory($start_date, $end_date);

	

	return 0;
}