<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";// precisa incluir por que está sendo enviado através de um formulario
session_start();
//echo session_id();
session_destroy();

header('location: '. myURL(). 'view/login.php');
exit;