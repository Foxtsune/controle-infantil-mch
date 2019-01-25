<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/candidate.php';

function loadCandidateUpdate($id){
	return getCandidateById($id);	
}