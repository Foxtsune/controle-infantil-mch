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
/*Get cadidate by Id*/
function getCandidateById($id){
	$conn = dbConnetion();
	$statement = $conn->prepare("SELECT * FROM `candidate` WHERE id = :id");
	$statement->bindParam(':id', $id);
	$statement->execute();
	$candidate = $statement->fetch(PDO::FETCH_OBJ);
	return $candidate;
}

function insertCandidate($name,$birth,$inscription,$mother,$father,$street,$number,$neighborhood,$tel,$tel2){
	$conn = dbConnetion();
	$statement = $conn->prepare("INSERT INTO `candidate` (name,birth,inscription,mother,father,street,number,neighborhood,telephone,telephone2) 
		VALUES(:name,:birth,:inscription,:mother,:father,:street,:number,:neighborhood,:tel,:tel2)");
	$statement->execute(array(":name" => $name, "birth" => $birth, "inscription" => $inscription,
	 						  "mother" => $mother, "father" => $father, "street" => $street,
	 						  "number" => $number, "neighborhood" => $neighborhood, 
	 						  "tel" => $tel, "tel2" => $tel2));
	return $statement->rowCount();
}

function updateCandidate($id,$name,$birth,$inscription,$mother,$father,$street,$number,$neighborhood,$tel,$tel2,$contact,$destination,$situation){
	$conn = dbConnetion();
	$statement = $conn->prepare("UPDATE `candidate` SET name=:name, birth=:birth, 
								inscription=:inscription, mother=:mother, father=:father, street=:street, 
								number=:number,neighborhood=:neighborhood, telephone=:tel, telephone2=:tel2,
								contact=:contact, destination=:destination, situation=:situation  WHERE id=:id");
	$statement->execute(array(":name"=>$name,":birth"=>$birth,":inscription"=>$inscription,
								":mother"=>$mother,":father"=>$father,":street"=>$street,":number"=>$number,
								":neighborhood"=>$neighborhood,":tel"=>$tel,":tel2"=>$tel2,":contact"=>$contact,
								":destination"=>$destination,":situation"=>$situation,":id"=>$id));
	return $statement->rowCount();
}