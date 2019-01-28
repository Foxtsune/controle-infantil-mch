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