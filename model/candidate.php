<?php 
require_once 'connection.php';


/*Get all of my candidates*/
function getAllCandidates(){
	$conn = dbConnetion();
	// http://php.net/manual/pt_BR/pdo.prepare.php
	$statement = $conn->prepare("SELECT * FROM `candidate`");
	$statement->execute();
	$candidates = $statement->fetchAll(PDO::FETCH_OBJ);
	return $candidates;
}

function insertCandidate($name,$birth,$inscription,$mother,$father){
	$conn = dbConnetion();
	$statement = $conn->prepare("INSERT INTO `candidate` (nome,foto,email) VALUES(:name, :photo, :email)");
	$statement->execute(array(":name"=>$name,":photo"=>$photo,":email"=>$email));
	return $statement->rowCount();
}