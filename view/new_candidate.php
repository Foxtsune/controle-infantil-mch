<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";

require_once abspath().'/controller/insert_candidate.php';
require_once abspath().'/view/template/frontend/header.php';

?>


<!-- Page Content -->
	<div class="container">
        <div id="page-content-wrapper">
            <section class="container-fluid text-center">
                <h1 class="mb-5">Cadastrar Candidato</h1>
                <form action="../controller/insert_candidate.php" method="post">
	                <div class="row my-md-2"> 
	                    <div class="col-md-8 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-name">Nome do Candidato</span>
							  </div>
							  <input type="text" required class="form-control" id="name" name="name" aria-describedby="basic-addon-name">
							</div>                      
	                    </div>
	                    <div class="col-md-4 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-birth">Data de Nascimento</span>
							  </div>
							  <input type="date" required class="form-control" id="birth" name="birth" aria-describedby="basic-addon-birth">
							</div>
	                    </div>
					</div>

					<div class="row my-md-2"> 
	                    <div class="col-md-4 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-tel">Telefone</span>
							  </div>
							  <input type="tel" required class="form-control" id="tel" name="tel" aria-describedby="basic-addon-tel">
							</div>                      
	                    </div>
	                    <div class="col-md-4 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-tel2">telefone</span>
							  </div>
							  <input type="tel" required class="form-control" id="tel2" name="tel2" aria-describedby="basic-addon-tel2">
							</div>                      
	                    </div>
	                    <div class="col-md-4 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-birth">Data do Cadastro</span>
							  </div>
							  <input type="date" required class="form-control" id="birth" name="birth" aria-describedby="basic-addon-birth">
							</div>
	                    </div>
					</div>

					<div class="row my-md-2"> 
	                    <div class="col-md-5 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-neigborhood">Bairro</span>
							  </div>
							  <input type="text" required class="form-control" id="neigborhood" name="neigborhood" aria-describedby="basic-addon-neigborhood">
							</div>
	                    </div>
	                    <div class="col-md-5 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-street">Logradouro</span>
							  </div>
							  <input type="text" required class="form-control" id="rua" name="rua" aria-describedby="basic-addon-street">
							</div>                      
	                    </div>
	                    <div class="col-md-2 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-number">Número</span>
							  </div>
							  <input type="number" required class="form-control" id="number" name="number" aria-describedby="basic-addon-number">
							</div>
	                    </div>
					</div>

					<div class="row my-md-2"> 
	                    <div class="col-md-6 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-father">Nome do Pai</span>
							  </div>
							  <input type="text" required class="form-control" id="father" name="father" aria-describedby="basic-addon-father">
							</div>                      
	                    </div>
	                    <div class="col-md-6 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-mother">Nome da Mãe</span>
							  </div>
							  <input type="text" required class="form-control" id="mother" name="mother" aria-describedby="basic-addon-mother">
							</div>
	                    </div>
					</div>

					<div class="row my-md-2 justify-content-around mt-5">
	                    <div class="form-group col-md-6 col-sm-12">
	                       <label class="sr-only" for="inserir">Inserir</label>
	                       <button type="submit" class="btn btn-secondary btn-block" id="insert" name="insert">Inserir</button>
	                    </div>
	                </div>
                </form>
            </section>
        </div>
    </div>
<!-- /#page-content-wrapper -->



 <!-- EMPTY DIV - PUSH FOOTER -->
    <div class="container p-5 m-2">
    </div>
<?php require_once abspath().'/view/template/frontend/footer.php'; ?>
<script>
	$(document).ready(function(){
		setupPhoneMaskOnField('#tel');
		setupPhoneMaskOnField('#tel2')
	});
</script>