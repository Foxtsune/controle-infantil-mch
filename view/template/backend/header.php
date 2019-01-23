<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../assets/img/icon-salon.png">

    <title>Haircut Talents</title>


    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/css/dataTables.bootstrap4.css"/>
    <link href="../../assets/css/adm.css" rel="stylesheet">

</head>

<body>
    <!-- #wrapper -->
    <div id="wrapper">
        <?php if (isset($_SESSION['id'])): ?>
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="home.php">
                        Haircut Talents
                    </a>
                </li>
                <li>
                    <?php if ($_SESSION['id'] == 1): ?>
                    <a href="inserir_usuario.php">Novo Usuário</a>
                    <?php endif ?>
                </li>
                <li>
                    <?php if ($_SESSION['id'] == 1): ?>
                    <a href="gerenciar_usuarios.php">Gerenciar Usuários</a>
                    <?php endif ?>
                </li>
                <li>
                    <a href="inserir_cliente.php">Novo Cliente</a>
                </li>
                <li>
                    <a href="gerenciar_clientes.php">Gerenciar Cliente</a>
                </li>
                <li>
                    <a href="gerenciar_cortes.php">Cortes</a>
                </li>
                <li>
                    <a href="#">Meus Dados</a>
                </li>
                <li>
                    <a href="logoff.php">Deslogar</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <?php endif ?>