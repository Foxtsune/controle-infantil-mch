<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/candidates.php';

function loadCandidateUpdate($id){
	return getCandidateById($id);
}

function checkContact($contact){
	switch ($contact) {
		case 'tel':
			return "<option> </option>
			<option value='tel' selected>Telefone</option>
			<option value='letter'>Carta</option>";
			break;
		case 'letter':
			return "<option> </option>
			<option value='tel'>Telefone</option>
			<option value='letter' selected>Carta</option>";
			break;
		default:
			return "<option selected> </option>
			<option value='tel'>Telefone</option>
			<option value='letter'>Carta</option>";
			break;
	}
}

function checkDestination($destination){

	$nursery = "CEMEI ";

	switch ($destination) {
		case 'CEMEAI':
			return "<option> </option>
			<option value='CEMEAI' selected>CEMEAI</option>
			<option value='Donana'>".$nursery."Vovó Donana</option>
			<option value='Guiomar'>".$nursery."Vovó Guiomar</option>
			<option value='Iracema'>".$nursery."Vovó Iracema</option>
			<option value='Jardim'>".$nursery."Jardim das Oliveiras</option>
			<option value='Luiza'>".$nursery."Vovó Luiza</option>
			<option value='Madre'>".$nursery."Madre Carmen Sallés</option>
			<option value='Paulina'>".$nursery."Vovó Paulina</option>";
			break;
		case 'Donana':
			return "<option> </option>
			<option value='CEMEAI'>CEMEAI</option>
			<option value='Donana' selected>".$nursery."Vovó Donana</option>
			<option value='Guiomar'>".$nursery."Vovó Guiomar</option>
			<option value='Iracema'>".$nursery."Vovó Iracema</option>
			<option value='Jardim'>".$nursery."Jardim das Oliveiras</option>
			<option value='Luiza'>".$nursery."Vovó Luiza</option>
			<option value='Madre'>".$nursery."Madre Carmen Sallés</option>
			<option value='Paulina'>".$nursery."Vovó Paulina</option>";
			break;
		case 'Guiomar':
			return "<option> </option>
			<option value='CEMEAI' selected>CEMEAI</option>
			<option value='Donana'>".$nursery."Vovó Donana</option>
			<option value='Guiomar' selected>".$nursery."Vovó Guiomar</option>
			<option value='Iracema'>".$nursery."Vovó Iracema</option>
			<option value='Jardim'>".$nursery."Jardim das Oliveiras</option>
			<option value='Luiza'>".$nursery."Vovó Luiza</option>
			<option value='Madre'>".$nursery."Madre Carmen Sallés</option>
			<option value='Paulina'>".$nursery."Vovó Paulina</option>";
			break;
		case 'Iracema':
			return "<option> </option>
			<option value='CEMEAI' selected>CEMEAI</option>
			<option value='Donana'>".$nursery." Vovó Donana</option>
			<option value='Guiomar'>".$nursery." Vovó Guiomar</option>
			<option value='Iracema' selected>".$nursery." Vovó Iracema</option>
			<option value='Jardim'>".$nursery." Jardim das Oliveiras</option>
			<option value='Luiza'>".$nursery."Vovó Luiza</option>
			<option value='Madre'>".$nursery." Madre Carmen Sallés</option>
			<option value='Paulina'>".$nursery." Vovó Paulina</option>";
			break;
		case 'Jardim':
			return "<option> </option>
			<option value='CEMEAI'>CEMEAI</option>
			<option value='Donana'>".$nursery." Vovó Donana</option>
			<option value='Guiomar'>".$nursery." Vovó Guiomar</option>
			<option value='Iracema'>".$nursery." Vovó Iracema</option>
			<option value='Jardim' selected>".$nursery." Jardim das Oliveiras</option>
			<option value='Luiza'>".$nursery."Vovó Luiza</option>
			<option value='Madre'>".$nursery." Madre Carmen Sallés</option>
			<option value='Paulina'>".$nursery." Vovó Paulina</option>";
			break;
		case 'Luiza':
			return "<option> </option>
			<option value='CEMEAI'>CEMEAI</option>
			<option value='Donana'>".$nursery."Vovó Donana</option>
			<option value='Guiomar'>".$nursery."Vovó Guiomar</option>
			<option value='Iracema'>".$nursery."Vovó Iracema</option>
			<option value='Jardim'>".$nursery."Jardim das Oliveiras</option>
			<option value='Luiza' selected>".$nursery."Vovó Luiza</option>
			<option value='Madre'>".$nursery."Madre Carmen Sallés</option>
			<option value='Paulina'>".$nursery."Vovó Paulina</option>";
			break;
		case 'Madre':
			return "<option> </option>
			<option value='CEMEAI' selected>CEMEAI</option>
			<option value='Donana'>".$nursery."Vovó Donana</option>
			<option value='Guiomar'>".$nursery."Vovó Guiomar</option>
			<option value='Iracema'>".$nursery."Vovó Iracema</option>
			<option value='Jardim'>".$nursery."Jardim das Oliveiras</option>
			<option value='Luiza'>".$nursery."Vovó Luiza</option>
			<option value='Madre' selected>".$nursery."Madre Carmen Sallés</option>
			<option value='Paulina'>".$nursery."Vovó Paulina</option>";
			break;
		case 'Paulina':
			return "<option> </option>
			<option value='CEMEAI' selected>CEMEAI</option>
			<option value='Donana'>".$nursery."Vovó Donana</option>
			<option value='Guiomar'>".$nursery."Vovó Guiomar</option>
			<option value='Iracema'>".$nursery."Vovó Iracema</option>
			<option value='Jardim'>".$nursery."Jardim das Oliveiras</option>
			<option value='Luiza'>".$nursery."Vovó Luiza</option>
			<option value='Madre'>".$nursery."Madre Carmen Sallés</option>
			<option value='Paulina' selected>".$nursery."Vovó Paulina</option>";
			break;
		default:
			return "<option selected> </option>
			<option value='CEMEAI' selected>CEMEAI</option>
			<option value='Donana'>".$nursery."Vovó Donana</option>
			<option value='Guiomar'>".$nursery."Vovó Guiomar</option>
			<option value='Iracema'>".$nursery."Vovó Iracema</option>
			<option value='Jardim'>".$nursery."Jardim das Oliveiras</option>
			<option value='Luiza'>".$nursery."Vovó Luiza</option>
			<option value='Madre'>".$nursery."Madre Carmen Sallés</option>
			<option value='Paulina'>".$nursery."Vovó Paulina</option>";
			break;
	}
}

function checkSituation($situation){
	switch ($situation) {
		case 'conf':
			return "<option> </option>
			<option value='Confirmado' selected>Confirmado</option>
			<option value='Desistente'>Desistente</option>";
			break;
		case 'desist':
			return "<option> </option>
			<option value='Confirmado'>Confirmado</option>
			<option value='Desistente' selected>Desistente</option>";
			break;
		default:
			return "<option selected> </option>
			<option value='Confirmado'>Confirmado</option>
			<option value='Desistente'>Desistente</option>";
			break;
	}
}

$error = "Erro";
$success = "Sucesso";

if (isset($_POST['edit'])) {

	$id = $_POST['id'];
	$name = $_POST['name'];
	$birth = $_POST['birth'];
	$tel =  numberTransform($_POST['tel']);
	$tel2 =  numberTransform($_POST['tel2']);
	$inscription =  $_POST['inscription'];
	$neighborhood = $_POST['neighborhood'];
	$street =  $_POST['street'];
	$number = $_POST['number'];
	$father = $_POST['father'];
	$mother =  $_POST['mother'];
	$contact = $_POST['contact'];
	$destination = $_POST['destination'];
	$situation = $_POST['situation'];

	try {
		updateCandidates($id,$name,$birth,$inscription,$mother,$father,$street,$number,$neighborhood,$tel,$tel2,$contact,$destination,$situation);
		$_SESSION['data'] = array('msg' => 'Candidato editado com sucesso.', 'type' => $success); 
		header('location: '. myURL(). 'view/index.php');
		exit;
	} catch (PDOException $e) {
		$data = array('msg' => 'Erro:'.$e->getMessage(), 'type' => $error);//DEBUG MSG
    	$_SESSION['data'] = $data;
    	header('location: '. myURL(). 'view/index.php');
		exit;
	}
}