<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" href="../assets/img/brasão.png">

    <title>Monitoramento de Vagas da Educação Infantil</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Datatables  CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap4.css"/>
  </head>
  
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top row">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img class="img-fluid" src="../assets/img/brasão.png" alt="Brasão Machado">
        </a>
        <a href="index.php" class="decoClear h5"><span class="text-uppercase d-none d-md-block">Monitoramento de Vagas da Educação Infantil</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar" aria-controls="mynavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="mynavbar">
          <ul class="navbar-nav ml-auto bareffect">
            <li class="position-relative">
              <a class="nav-link" href="new_candidate.php">Inserir Candidato</a>
            </li>
            <li class="position-relative">
              <a class="nav-link" href="#">Exportar</a>
            </li>
            <?php if ($_SESSION['admin']==1): ?>
              <li class="position-relative">
                <a class="nav-link" href="#">Usuários</a>
              </li>
            <?php endif ?>
            <li class="nav-item dropdown position-relative">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name']?></a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="edit_user.php">Meus dados</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Sair</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Navigation end -->