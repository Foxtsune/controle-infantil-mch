<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/candidates.php';


function getCategories(){
	$age = "-6 year";
	if (isset($_GET['search'])) {
		$end_date = $_GET['date'];
		$inf = $_GET['inf'];
		

		$interval = getInterval($age,$end_date);

		return checkInf($end_date,$inf,$interval);

	} else{
		$end_date = date("Y")."-03-31";
		return getInterval($age,$end_date);
	}
}

//If datadif is different to the Inf. then array_shift
function checkInf($end_date,$inf,array $interval){
	$candidateList = array();

	while ($candidate = array_shift($interval)) {
		// If have less than a year
		if (strpos(dateDifference($candidate->birth,$end_date), 'Meses') && $inf == 1) { 
			array_unshift($candidateList,$candidate);
			continue;
		}
		if((dateDifference($candidate->birth,$end_date)==$inf) )
			array_unshift($candidateList,$candidate);
	}
	// exit();
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

function showSelectInf(){
	if ($_GET['inf']) {
		for ($i=1; $i < 6; $i++) {
			if ($_GET['inf']==$i) {
				echo "<option value='$i' selected>$i</option>";
				continue;
			}
			echo "<option value='$i'>$i</option>";
		}
	} else {
		echo "<option value='1' selected>1</option>";
		echo "<option value='2'>2</option>";
		echo "<option value='3'>3</option>";
		echo "<option value='4'>4</option>";
		echo "<option value='5'>5</option>";
	}
}