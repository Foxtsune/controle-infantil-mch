<?php

session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
include abspath().'/model/candidates.php';

  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

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

  $out = fopen("php://output", 'w');

  $flag = false;
  $result = CSVData();

  while ($row = array_shift($result)) {
  	if(!$flag) {
      // display field/column names as first row
      fputcsv($out, array_keys($row), ',', '"');
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    fputcsv($out, array_values($row), ',', '"');
  }

  fclose($out);
  exit;


  /*$result = getAllCandidates();

  while ($row = array_pop($result)) {
  	echo "<pre>";
  	print_r($row);
  	echo "</pre>";
  }*/
?>