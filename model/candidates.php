<?php 
require_once 'connection.php';


/*Get all of my candidatess*/
function getAllCandidates(){
	$conn = dbConnetion();
	// http://php.net/manual/pt_BR/pdo.prepare.php
	$statement = $conn->prepare("SELECT * FROM `candidates`");
	$statement->execute();
	$candidates = $statement->fetchAll(PDO::FETCH_OBJ);
	return $candidates;
}

function CSVData(){
	$conn = dbConnetion();
	// http://php.net/manual/pt_BR/pdo.prepare.php
	$statement = $conn->prepare("SELECT * FROM `candidates`");
	$statement->execute();
	$candidates = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $candidates;
}

/*Get cadidate by Id*/
function getCandidateById($id){
	$conn = dbConnetion();
	$statement = $conn->prepare("SELECT * FROM `candidates` WHERE id = :id");
	$statement->bindParam(':id', $id);
	$statement->execute();
	$candidate = $statement->fetch(PDO::FETCH_OBJ);
	return $candidate;
}

function insertCandidates($name,$birth,$inscription,$mother,$father,$street,$number,$neighborhood,$tel,$tel2){
	$conn = dbConnetion();
	$statement = $conn->prepare("INSERT INTO `candidates` (name,birth,inscription,mother,father,street,number,neighborhood,telephone,telephone2) 
		VALUES(:name,:birth,:inscription,:mother,:father,:street,:number,:neighborhood,:tel,:tel2)");
	$statement->execute(array(":name" => $name, "birth" => $birth, "inscription" => $inscription,
	 						  "mother" => $mother, "father" => $father, "street" => $street,
	 						  "number" => $number, "neighborhood" => $neighborhood, 
	 						  "tel" => $tel, "tel2" => $tel2));
	return $statement->rowCount();
}

function updateCandidates($id,$name,$birth,$inscription,$mother,$father,$street,$number,$neighborhood,$tel,$tel2,$contact,$destination,$situation){
	$conn = dbConnetion();
	$statement = $conn->prepare("UPDATE `candidates` SET name=:name, birth=:birth, 
								inscription=:inscription, mother=:mother, father=:father, street=:street, 
								number=:number,neighborhood=:neighborhood, telephone=:tel, telephone2=:tel2,
								contact=:contact, destination=:destination, situation=:situation  WHERE id=:id");
	$statement->execute(array(":name"=>$name,":birth"=>$birth,":inscription"=>$inscription,
								":mother"=>$mother,":father"=>$father,":street"=>$street,":number"=>$number,
								":neighborhood"=>$neighborhood,":tel"=>$tel,":tel2"=>$tel2,":contact"=>$contact,
								":destination"=>$destination,":situation"=>$situation,":id"=>$id));
	return $statement->rowCount();
}

function deleteCandidate($id){
	$conn = dbConnetion();
	$statement = $conn->prepare("DELETE FROM `candidates` WHERE id=:id");
	$statement->bindParam(':id', $id);
	$statement->execute();
	return $statement->rowCount();
}

function getCategory($firstDate,$secondDate){
	$conn = dbConnetion();
	$statement = $conn->prepare("SELECT * FROM `candidates` WHERE birth BETWEEN '$firstDate' AND '$secondDate'");
	$statement->execute();
	$candidates = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $candidates;
}

//SELECT * FROM `candidates` WHERE birth BETWEEN '2018-01-01' AND '2018-12-31'