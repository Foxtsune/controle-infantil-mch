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
	 	<h3 class="my-5"><p>Insira o ano de nascimento dos candidatos a serem exportados</p></h3>
	 	<form action="../controller/export.php" method="post">
	 		<div class="form-row export justify-content-around mt-5">
 		 		<div class="col-5 m-5">
 			 		<select id="year" name="year" class="form-control" required>
 		        		<option value="" selected>---</option>
 		        		<option value="2017">2017</option>
 		        		<option value="2018">2018</option>
 		        		<option value="2019">2019</option>
 		        		<option value="2020">2020</option>
 		        		<option value="2021">2021</option>
 		        		<option value="2022">2022</option>
 	      			</select>
 		 		</div>
    			<div class="col-auto m-5">
		      		<button type="submit" class="btn btn-outline-light">Exportar</button>
		    	</div>
 		 	</div>
		</form>
	</section>
</div>

<?php
require_once abspath().'/view/template/frontend/footer.php';
require_once abspath().'/view/template/frontend/delete_candidate_modal.php';
?>