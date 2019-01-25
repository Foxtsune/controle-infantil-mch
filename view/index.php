<?php 
/* Script para redirecionar a página index na view */
//header('location:view/frontend/index.php');

require_once $_SERVER['DOCUMENT_ROOT']."/Controle-Infantil/assets/helpers.php";

require_once abspath().'/controller/manage_candidate.php';
require_once abspath().'/view/template/frontend/header.php';
$rows = loadAllCandidates();
?>

<!-- Page Content -->
    <div id="page-content-wrapper" style="width: 100%">
        <section class="container-fluid">
            <table id="table_id" class="display table">
                <thead>
                    <!-- 15306 default column size javascrip file  -->
                    <tr id="theader">
                        <th scope="col" class="text-center">Editar</th>
                        <th scope="col" class="text-center">Nome</th>
                        <th scope="col" class="text-center">Data do Casdastro</th>
                        <th scope="col" class="text-center">Data de Nascimento</th>
                        <th scope="col" class="text-center">Pai</th>
                        <th scope="col" class="text-center">Mãe</th>
                        <th scope="col" class="text-center">Logradouro</th>
                        <th scope="col" class="text-center">N°</th>
                        <th scope="col" class="text-center">Bairro</th>
                        <th scope="col" class="text-center">Telefone</th>
                        <th scope="col" class="text-center">Telefone</th>
                        <th scope="col" class="text-center">Contato</th>
                        <th scope="col" class="text-center">Unidade de Zoneamento</th>
                        <th scope="col" class="text-center">Situação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row => $column): ?>
                    <tr>
                        <td scope="row"><a href="edit_candidate.php?id=<?php echo $column->id ?>"><img src="../assets/img/edit.png" width="30" height="30"></a></td>
                        <td scope="row"><?php echo $column->name ?></td>
                        <td scope="row"><?php echo $column->inscription ?></td>
                        <td scope="row"><?php echo $column->birth ?></td>
                        <td scope="row"><?php echo $column->father ?></td>
                        <td scope="row"><?php echo $column->mother ?></td>
                        <td scope="row"><?php echo $column->street ?></td>
                        <td scope="row"><?php echo $column->number ?></td>
                        <td scope="row"><?php echo $column->neighborhood ?></td>
                        <td scope="row"><?php echo $column->telephone ?></td>
                        <td scope="row"><?php echo $column->telephone2 ?></td>
                        <td scope="row"><?php echo $column->contact ?></td>
                        <td scope="row"><?php echo $column->destination ?></td>
                        <td scope="row"><?php echo $column->situation ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </div>
    <!-- EMPTY DIV - PUSH FOOTER -->
    <div class="container p-5 m-2">
    </div>
<?php require_once abspath().'/view/template/frontend/footer.php'; ?>