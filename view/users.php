<?php 
/* Script para redirecionar a página index na view */
//header('location:view/frontend/index.php');

require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";

require_once abspath().'/controller/manage_users.php';
require_once abspath().'/view/template/frontend/header.php';
$rows = loadAllUsers();
validateSession();
?>

<!-- Page Content -->
    <div id="page-content-wrapper" style="width: 100%">
        <section class="container-fluid">
            <div class="row">
                <div class="col-10"><p><h3><u>Usuários Ativos</u></h3></p></div>
                <div class="col-2"><a href="new_user.php"><img src="../assets/img/add.png" title="Novo Usuário" width="110" height="110"></a></div>
            </div>
            <table id="table_id" class="display table table-bordered table-hover">
                <thead>
                    <!-- 15306 default column size javascrip file  -->
                    <tr id="theader">
                        <th scope="col" class="text-center">Editar</th>
                        <th scope="col" class="text-center">Nome</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row => $column): if ($column->admin == 1) continue;?>
                    <tr>
                        <td scope="row" class="text-center"><a href="edit_users.php?id=<?php echo $column->id ?>"><img src="../assets/img/edit.png" width="30" height="30"></a></td>
                        <td scope="row" class="text-center"><?php echo $column->name ?></td>
                        <td scope="row" class="text-center"><?php echo $column->email ?></td>
                        <td scope="row" class="text-center">
                            <a href="#" data-href="../controller/delete_user.php?id=<?php echo $column->id ?>" data-toggle="modal" data-target="#confirm-delete"><img src="../assets/img/delete.png" width="30" height="30"></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </div>
    <!-- EMPTY DIV - PUSH FOOTER -->
    <div class="container p-5 m-2">
    </div>

<?php
require_once abspath().'/view/template/frontend/footer.php';
require_once abspath().'/view/template/frontend/delete_user_modal.php';
?>
<script type="text/javascript">
    datatableApplyUsers(); 
    $('.dropdown-toggle').dropdown()
</script>
<?php if (isset($_SESSION['data']))triggerModal() ?>