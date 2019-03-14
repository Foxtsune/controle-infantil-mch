<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/candidates.php';

  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.
  
if(isset($_POST['year'])){

  var_dump($_POST['year']);
  exit();

 function cleanData(&$str)
  {
    if($str == 't') $str = 'TRUE';
    if($str == 'f') $str = 'FALSE';
    if(preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) {
      $str = "'$str'";
    }
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    $str = mb_convert_encoding($str, 'UTF-16LE', 'UTF-8');
  }

  // filename for download
  $filename = "controle_infantil_" . date('Ymd') . ".csv";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: text/csv; charset=UTF-16LE");

  $header = ["id","nome","nascimento","inscrição","mãe","pai","logradouro","número","bairro","telefone1","telefone2","contato","destino","situação"];

  $out = fopen("php://output", 'w');

  $flag = false;
  $result = export($_POST['year']);

  while ($row = array_shift($result)) {
  	if(!$flag) {
      // display field/column names as first row
      array_walk($header, __NAMESPACE__ . '\cleanData');
      fputcsv($out, array_values($header), ',', '"');
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    fputcsv($out, array_values($row), ',', '"');
  }
  $msg = array(
    array("Como formatar os dados na planilha"),
    array("1 - Selecione toda a primeira coluna"),
    array("2 - Menu Dados"),
    array("3 - Texto para colunas"),
    array("4 - Delimitado - Avançar"),
    array("5 - Vírgula - Avançar"),
    array("6 - Avançar - Concluir"));

  foreach ($msg as $row) {
    array_walk($row, __NAMESPACE__ . '\cleanData');
    fputcsv($out, $row);
  }

  fclose($out);
  exit;
} else {
  $data = array('msg' => 'Insira o ano do nascimento', 'type' => $error);
  $_SESSION['data'] = $data;
  header('location: ../view/export.php');
  exit;
}
?>