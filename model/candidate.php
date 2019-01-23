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