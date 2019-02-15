<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/candidates.php';



function getCategories($inf = '',$end_date = ''){
	if (isset($_GET['search'])) {
		$end_date = $_GET['date'];
		$inf = $_GET['inf'];
	}

	switch ($inf) {
		case 'I':
			return getInterval("-1 year",$end_date);
			break;
		case 'II':
			return getInterval("-2 year",$end_date);
			break;
		case 'III':
			return getInterval("-3 year",$end_date);
			break;
		case 'IV':
			return getInterval("-4 year",$end_date);
			break;
		case 'V':
			return getInterval("-5 year",$end_date);
			break;
		default:
			return getInterval("-1 year",date("Y-m-d"));
			break;
	}
}


// Returns interval between years of candidate
function getInterval(String $anos,$end_date){
	$date = strtotime($anos);
	$date = date("Y",$date);
	$start_date = date("Y-m-d",strtotime("31 march $date"));
	return getCategory($start_date, $end_date);
}