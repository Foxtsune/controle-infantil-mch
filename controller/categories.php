<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/candidates.php';

//If datadif is different to the Inf. then array_shift 

function getCategories(){
	$age = "-6 year";
	if (isset($_GET['search'])) {
		$end_date = $_GET['date'];
		$inf = $_GET['inf'];
		switch ($inf) {
			case 'I':
				$inf = 1;
				break;
			case 'II':
				$inf = 2;
				break;
			case 'III':
				$inf = 3;
				break;
			case 'IV':
				$inf = 4;
				break;
			case 'V':
				$inf = 5;
				break;
		}

		$interval = getInterval($age,$end_date);

		return checkInf($end_date,$inf,$interval);

	}else{
		$end_date = date("Y")."-03-31";
		return getInterval($age,$end_date);
	}
}


function checkInf($end_date,$inf,array $interval){
	$candidateList = array();

	while ($candidate = array_shift($interval)) {
		if(dateDifference($candidate->birth,$end_date)==$inf)
			array_unshift($candidateList,$candidate);
	}
	return $candidateList;
}

// Returns interval between years of candidate
function getInterval(String $years,$end_date){
	$parsed_date = strtotime($end_date);
	$start_date = strtotime($years,$parsed_date);
	$start_date = date("Y-m-d",$start_date);
	$result = getCategory($start_date, $end_date);
	return $result;
}