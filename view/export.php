<?php 
/* Script para redirecionar a página index na view */
//header('location:view/frontend/index.php');

require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";

require_once abspath().'/controller/categories.php';
require_once abspath().'/view/template/frontend/header.php';
$rows = getCategories();
validateSession();
?>

<div id="page-content-wrapper" style="width: 100%">
	 <section class="container-fluid text-center">
	 </section>
</div>

<?php
require_once abspath().'/view/template/frontend/footer.php';
require_once abspath().'/view/template/frontend/delete_candidate_modal.php';
?>