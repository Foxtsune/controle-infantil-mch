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
			return getInterval("-1 year",date("Y")."-03-31");
			break;
	}
}


// Returns interval between years of candidate
function getInterval(String $years,$end_date){
	$parsed_date = strtotime($end_date);//Convert end_data to a timestamp
	$parsed_date = strtotime($years,$parsed_date);//Subtract number of years of end_date timestamp
	$start_date = date("Y-m-d",$parsed_date);//Convert start_date
	$end_date = strtotime("+1 year",strtotime($start_date));// Add one year to the start_date
	$end_date = date("Y-m-d",$end_date);// Add one year to the start_date
	echo $years."<br>";
	echo $start_date."<br>";
	echo $end_date."<br>";
	
	return getCategory($start_date, $end_date);
}