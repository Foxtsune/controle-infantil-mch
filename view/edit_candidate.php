<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";

require_once abspath().'/controller/edit_candidate.php';
require_once abspath().'/view/template/frontend/header.php';
$candidate = loadCandidateUpdate($_GET['id']);
?>


<!-- Page Content -->
	<div class="container">
        <div id="page-content-wrapper">
            <section class="container-fluid text-center">
                <h1 class="mb-5">Editar Candidato</h1>
                <form action="../controller/edit_candidate.php" method="post">
	                <div class="row my-md-2"> 
	                    <div class="col-md-8 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-name">Nome do Candidato</span>
							  </div>
							  <input type="text" required class="form-control" id="name" name="name" aria-describedby="basic-addon-name" value="<?php echo $candidate->name ?>">
							</div>                      
	                    </div>
	                    <div class="col-md-4 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-birth">Data de Nascimento</span>
							  </div>
							  <input type="date" required class="form-control" id="birth" name="birth" aria-describedby="basic-addon-birth" value="<?php echo $candidate->birth ?>">
							</div>
	                    </div>
					</div>

					<div class="row my-md-2"> 
	                    <div class="col-md-4 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-tel">Telefone</span>
							  </div>
							  <input type="text" required minlength="8" class="form-control" id="tel" name="tel" aria-describedby="basic-addon-tel" value="<?php echo $candidate->telephone ?>">
							</div>                      
	                    </div>
	                    <div class="col-md-4 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-tel2">telefone</span>
							  </div>
							  <input type="text" required minlength="8" class="form-control" id="tel2" name="tel2" aria-describedby="basic-addon-tel2" value="<?php echo $candidate->telephone2 ?>">
							</div>                      
	                    </div>
	                    <div class="col-md-4 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-inscription">Data do Cadastro</span>
							  </div>
							  <input type="date" required class="form-control" id="inscription" name="inscription" aria-describedby="basic-addon-inscription"  value="<?php echo $candidate->inscription ?>">
							</div>
	                    </div>
					</div>

					<div class="row my-md-2"> 
	                    <div class="col-md-5 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-neighborhood">Bairro</span>
							  </div>
							  <input type="text" required class="form-control" id="neighborhood" name="neighborhood" aria-describedby="basic-addon-neighborhood" value="<?php echo $candidate->neighborhood ?>">
							</div>
	                    </div>
	                    <div class="col-md-5 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-street">Logradouro</span>
							  </div>
							  <input type="text" required class="form-control" id="street" name="street" aria-describedby="basic-addon-street" value="<?php echo $candidate->street ?>">
							</div>                      
	                    </div>
	                    <div class="col-md-2 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-number">Número</span>
							  </div>
							  <input type="number" required class="form-control" id="number" name="number" aria-describedby="basic-addon-number" value="<?php echo $candidate->number ?>">
							</div>
	                    </div>
					</div>

					<div class="row my-md-2"> 
	                    <div class="col-md-6 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-father">Nome do Pai</span>
							  </div>
							  <input type="text" required class="form-control" id="father" name="father" aria-describedby="basic-addon-father" value="<?php echo $candidate->father ?>">
							</div>                      
	                    </div>
	                    <div class="col-md-6 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-mother">Nome da Mãe</span>
							  </div>
							  <input type="text" required class="form-control" id="mother" name="mother" aria-describedby="basic-addon-mother" value="<?php echo $candidate->mother ?>">
							</div>
	                    </div>
					</div>

					<div class="row my-md-2"> 
	                    <div class="col-md-4 col-sm-4">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-contact">Contato</span>
							  </div>
							  <input type="text" required class="form-control" id="contact" name="contact" aria-describedby="basic-addon-contact" value="<?php echo $candidate->contact ?>">
							</div>                      
	                    </div>
	                    <div class="col-md-4 col-sm-4">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-destination">Destino</span>
							  </div>
							  <input type="text" required class="form-control" id="destination" name="destination" aria-describedby="basic-addon-destination" value="<?php echo $candidate->destination ?>">
							</div>
	                    </div>
	                    <div class="col-md-4 col-sm-4">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-situation">Situação</span>
							  </div>	
							  <input type="text" required class="form-control" id="situation" name="situation" aria-describedby="basic-addon-situation" value="<?php echo $candidate->situation ?>">
							</div>
	                    </div>
					</div>
					<input type="hidden" id="id" name="id" value="<?php echo $candidate->id ?>">
					<div class="row my-md-2 justify-content-around mt-5">
	                    <div class="form-group col-md-6 col-sm-6">
	                       <label class="sr-only" for="edit">Inserir</label>
	                       <button type="submit" class="btn btn-success btn-block" id="edit" name="edit">Editar</button>
	                    </div>
	                    <div class="form-group col-md-6 col-sm-6">
	                       <label class="sr-only" for="cancel">Cancelar</label>
	                       <a href="index.php" class="btn btn-secondary btn-block" id="cancel" name="cancel">Cancelar</a>
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
<script type="text/javascript">applyMask()</script>