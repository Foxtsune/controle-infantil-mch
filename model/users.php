<?php 
require_once 'connection.php';


//Get Username and Id
function login($email,$password){
	$conn = dbConnetion();
	$statement = $conn->prepare("SELECT * FROM `users` WHERE email = :email AND password = :password");
	$statement->bindParam(':email', $email);
	$statement->bindParam(':password', $password);
	$statement->execute();
	$usuario = $statement->fetch(PDO::FETCH_OBJ);

	return $usuario;
}

function getUserById($id){
	$conn = dbConnetion();
	$statement = $conn->prepare("SELECT * FROM `users` WHERE id = :id");
	$statement->bindParam(':id', $id);
	$statement->execute();
	$user = $statement->fetch(PDO::FETCH_OBJ);
	return $user;
}

function updateUser($id,$name,$email,$password,$admin){
	$conn = dbConnetion();
	$statement = $conn->prepare("UPDATE `users` SET name=:name, email=:email, admin=:admin WHERE id=:id");
	$statement->execute(array(":name"=>$name,":email"=>$email,":admin"=>$admin,":id"=>$id));
	return $statement->rowCount();
}