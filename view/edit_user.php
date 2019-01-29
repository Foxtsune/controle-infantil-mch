<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";

require_once abspath().'/controller/edit_user.php';
require_once abspath().'/view/template/frontend/header.php';
$user = loadUserUpdate($_SESSION['id']);
?>


<!-- Page Content -->
	<div class="container">
        <div id="page-content-wrapper">
            <section class="container-fluid text-center">
                <h1 class="mb-5">Atualizar Dados</h1>
                <form action="../controller/edit_user.php" method="post">
	                <div class="row my-md-2">
	                    <div class="col-md-8 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-name">Nome</span>
							  </div>
							  <input type="text" required class="form-control" id="name" name="name" aria-describedby="basic-addon-name" value="<?php echo $user->name ?>">
							</div>                      
	                    </div>
	                    <div class="col-md-1 col-sm-12">
						  	<div class="custom-control custom-checkbox">
							  <input type="checkbox" class="custom-control-input" id="admin" name="admin" value="<?php echo $user->admin ?>" <?php if ($user->admin == 1) {echo "checked";} ?>>
							  <label class="custom-control-label" for="admin">Administrador</label>
							</div>
	                    </div>
					</div>
					<div class="row my-md-2">
	                    <div class="col-md-8 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-name">Email</span>
							  </div>
							  <input type="email" required class="form-control" id="name" name="name" aria-describedby="basic-addon-name" value="<?php echo $user->email ?>">
							</div>                      
	                    </div>
	                    <div class="col-md-4 col-sm-12">
	                    	<div class="input-group mb-md-3 mb-sm-1">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon-password">Senha</span>
							  </div>
							  <input type="password" required class="form-control" id="password" name="password" aria-describedby="basic-addon-password" value="<?php echo $user->password ?>">
							</div>                      
	                    </div>
					</div>
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