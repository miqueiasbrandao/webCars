<?php include 'controler/validarSession.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <title>Title</title>

        <?php include 'inc/header.php' ?>

    </head>

<body style="background-color: #CBCBCC;">

    <?php include 'inc/modais.php' ?>

    <?php include 'inc/nav.php' ?>

    <div class="container mt-3">

        <div class="row my-2 fadeIn">

            <div class="col-md">

                <h4>

                    Formulario / Editar / 

                    <a href="listagem.php" class="btn btn-primary btn-sm">

                        voltar

                    </a>

                </h4>

            </div>

            <div class="row my-2 fadeIn">

                <div class="col-md"></div>

            </div>
      
                <div class="card animate slideIn">

                    <form class="card-body" method="post" id="CarrosForm" action="controler/salvarEditar.php">

                        <?php

                        include 'controler/conexaoSql.php'; 

                        $editar = array(

                        'id' => $_GET['id'],

                        );

                        $consulta = $pdo->query("SELECT * FROM carros;");


                            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                
                                if($editar['id'] == $linha['id']) { ?>

                                    <div class="row g-2">

                                        <div class="col-md-4">

                                            <div class="form-group">

                                                <label for="modelo">

                                                Modelo

                                                </label>

                                                <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $linha['modelo'] ?>">

                                            </div>

                                        </div>

                                        <input type="hidden" id="id" name="id" value="<?php echo $linha['id'] ?>">

                                        <div class="col-md-4">

                                            <div class="form-group">

                                                <label for="placa">

                                                Placa

                                                </label>

                                                <input type="text" class="form-control" id="placa" name="placa" value="<?php echo $linha['placa'] ?>">

                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">

                                                <label for="marca">

                                                Marca

                                                </label>

                                                <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $linha['marca'] ?>">

                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">

                                                <label for="cor">

                                                Cor

                                                </label>

                                                <input type="text" class="form-control" id="cor" name="cor" value="<?php echo $linha['cor'] ?>">

                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">

                                                <label for="ano">

                                                Ano

                                                </label>

                                                <input type="text" class="form-control" id="ano" name="ano" value="<?php echo $linha['ano'] ?>">

                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">

                                                <label for="situacao">

                                                Situação

                                                </label>

                                                <?php
                                                    if($linha['situacao'] == 'vendido'){
                                                ?>
                                                    <input type="text" disabled class="form-control" id="ano" name="situacao" value="<?php echo $linha['situacao'] ?>">                     
                                                <?php
                                                    } else {
                                                ?>
                                                <div>
                                                    <select class="form-select" name=situacao aria-label="Default select example">
                                                        <option selected><?php echo $linha['situacao'] ?></option>

                                                        <?php if($linha['situacao'] != 'em preparacao'){ ?>
                                                        <option value="em preparacao">Em preparacao</option>
                                                        <?php } ?>

                                                        <?php if($linha['situacao'] != 'em estoque'){ ?>
                                                        <option value="em estoque">Em estoque</option>
                                                        <?php } ?>

                                                        <option value="vendido">Vendido</option>
                                                    </select>
                                                </div>                    
                                                <?php
                                                    }
                                                ?>

                                            </div>

                                        </div>

                                    </div>

                                <?php } ?>   

                            <?php } ?>

                        <div class="modal-footer">

                            <button type="submit" class="btn btn-primary btn-sm mt-3">

                                ✔️Salvar
                            
                            </button>

                        </div>

                    </form>
                    
                </div>

    </div>

</body>