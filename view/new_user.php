<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";

require_once abspath().'/controller/edit_user.php';
require_once abspath().'/view/template/frontend/header.php';
$user = loadUserUpdate($_SESSION['id']);
validateSession();
?>


<!-- Page Content -->
	<div class="container">
        <div id="page-content-wrapper">
            <section class="container-fluid text-center">
                <h1 class="mb-5">Inserir Novo Usuário</h1>
                <form action="../controller/insert_user.php" method="post">
	                <div class="row my-md-3 my-sm-5">
	                    <div class="col-md-6 col-sm-12">
	                    	<div class="input-group my-2">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-name">Nome</span>
							  </div>
							  <input type="text" required class="form-control" id="name" name="name" aria-describedby="basic-addon-name">
							</div>
	                    </div>
	                    <div class="col-md-6 col-sm-12">
	                    	<div class="input-group my-2">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-email">Email</span>
							  </div>
							  <input type="email" required class="form-control" id="email" name="email" aria-describedby="basic-addon-email">
							</div>                      
	                    </div>
	                    <!-- <div class="col-md-4 col-sm-12">
	                    	<div class="input-group my-2">
	                    							  <div class="input-group-prepend">
	                    							    <span class="input-group-text" id="basic-addon-password">Senha</span>
	                    							  </div>
	                    							  <input type="password" required class="form-control" id="password" name="password" aria-describedby="basic-addon-password">
	                    							</div>   
	                    </div> -->
					</div>

					<input type="hidden" id="password" name="password" value="<?php echo $user->password ?>">
					<input type="hidden" id="id" name="id" value="<?php echo $user->id ?>">
					
					<div class="row mt-md-5 justify-content-md-around">
	                    <div class="form-group col-md-6 col-sm-6">
	                       <label class="sr-only" for="insert">Inserir</label>
	                       <button type="submit" class="btn btn-outline-success btn-block" id="insert" name="insert">Inserir</button>
	                    </div>
	                    <div class="form-group col-md-6 col-sm-6">
	                       <label class="sr-only" for="cancel">Cancelar</label>
	                       <a href="users.php" class="btn btn-outline-secondary btn-block" id="cancel" name="cancel">Cancelar</a>
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
<?php 
require_once abspath().'/view/template/frontend/password_modal.php';
require_once abspath().'/view/template/frontend/footer.php'; ?>
<?php if (isset($_SESSION['data']))triggerModal() ?>