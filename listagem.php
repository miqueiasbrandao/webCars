<?php include 'controler/validarSession.php'; ?>



<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <title>Title</title>

        <?php include 'inc/header.php' ?>

    </head>

    <body style="background-color: #ccc;">
        <?php include 'inc/modais.php' ?>
        <?php include 'inc/nav.php' ?>

        <div class="container mt-3" id="teste">

            <div class="row my-2 fadeIn">

                <div class="col-md">

                    <h4>

                        Listagem / 

                        <a href="listagem.php" class="btn btn-primary btn-sm">

                            <i class="bi bi-arrow-clockwise"></i>
                            Atualizar

                        </a>

                        <?php
                        if($_SESSION['grupo_usuario'] == 1){ ?>
                        <a href="dashboard.php" class="btn btn-primary btn-sm">
                        <i class="bi bi-caret-left-square"></i>
                        Voltar
                        </a>
                        <?php } ?>

                    </h4>

                </div>

                <div class="col-md text-end" id="but">



                    <a class="btn btn-primary btn-sm" id="b" data-bs-toggle="modal" data-bs-target="#exampleModal">

                        + Carros

                    </a>

                </div>

                <?php

                include 'controler/conexaoSql.php';
                    
                ?>

                <div class="row my-4">

                    <form method="post" class="form-group animate slideIn">
                        
                        <div class="input-group mb-3">

                            <input type="text" name="busca" class="form-control" placeholder="&#128270; Pesquisar por Modelo, Placa, Marca, Cor, Ano ou Usuario que cadastrou" aria-label="Recipient's username" aria-describedby="button-addon2">

                            <button class="btn btn-primary" type="submit" id="button-addon2"><i class="bi bi-search"></i> Pesquisar</button>

                        </div>

                    </form>

                </div>

                <div class="card animate slideIn mb-5">

                    <table class="table table-sm">

                        <thead>

                            <tr class="text-center">

                            <th scope="col">#</th>

                            <th scope="col">Modelo</th>

                            <th scope="col">Placa</th>

                            <th scope="col">Marca</th>

                            <th scope="col">Cor</th>

                            <th scope="col">Ano</th>

                            <th scope="col">Usuario</th>

                            <th scope="col">Situação</th>

                            <th scope="col">Configuração</th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php

                            if(isset($_POST['busca'])){

                            $buscaModelo = $_POST['busca'];

                            $consulta = $pdo->query("SELECT * FROM carros;");

                            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {                        

                            if($buscaModelo == $linha['modelo'] || $buscaModelo == $linha['placa'] || $buscaModelo == $linha['marca'] || $buscaModelo == $linha['cor'] || $buscaModelo == $linha['ano']  || strtolower($buscaModelo) == $linha['login']){

                            if($_SESSION['grupo_usuario'] == 2 && $_SESSION['login'] == $linha['login']){

                            ?>

                                        <tr class="text-center">

                                            <th scope="row"><?php echo $linha['id'] ?></th>

                                            <td><?php echo $linha['modelo'] ?></td>

                                            <td><?php echo $linha['placa'] ?></td>

                                            <td><?php echo $linha['marca'] ?></td>

                                            <td><?php echo $linha['cor'] ?></td>

                                            <td><?php echo $linha['ano'] ?></td>

                                            <td><?php echo ucfirst($linha['login']) ?></td>

                                            <td>

                                                <div>

                                                <?php
                                                    if($linha['situacao'] == 'vendido'){
                                                ?>

                                                    <button class="btn btn-success btn-sm disabled container" type="button">                                                        

                                                        vendido
                                                        
                                                    </button>

                                                <?php } ?>

                                                <?php
                                                    if($linha['situacao'] == 'em estoque'){
                                                ?>

                                                    <button class="btn btn-warning btn-sm disabled container" type="button">                                                        

                                                        em estoque
                                                        
                                                    </button>

                                                <?php } ?>

                                                <?php
                                                    if($linha['situacao'] == 'em preparacao'){
                                                ?>

                                                    <button class="btn btn-secondary btn-sm disabled container" type="button">                                                        

                                                        em preparação
                                                        
                                                    </button>

                                                <?php } ?>

                                                </div>

                                            </td>
                                            
                                            <td>

                                                <div class="dropdown">

                                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="bi bi-gear-fill"></i>

                                                        opções

                                                    </button>

                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        
                                                        <li>

                                                            <a class="dropdown-item" href="editar.php?id=<?php echo $linha['id'] ?>">

                                                            <i class="bi bi-pencil-fill"></i> editar</a>

                                                        </li>

                                                        <li>

                                                            <a class="dropdown-item text-danger" href="excluirCarros.php?id=<?php echo $linha['id']; ?>">

                                                            <i class="bi bi-trash3-fill"></i> excluir</a>
                                                        </li>

                                                    </ul>

                                                </div>

                                            </td>
                                        </tr>

                            <?php

                            } 

                            if($_SESSION['grupo_usuario'] == 1){ 

                            ?>

                                <tr class="text-center">

                                    <th scope="row"><?php echo $linha['id'] ?></th>

                                    <td><?php echo $linha['modelo'] ?></td>

                                    <td><?php echo $linha['placa'] ?></td>

                                    <td><?php echo $linha['marca'] ?></td>

                                    <td><?php echo $linha['cor'] ?></td>

                                    <td><?php echo $linha['ano'] ?></td>

                                    <td><?php echo ucfirst($linha['login']) ?></td>

                                    <td>

                                        <div>

                                        <?php
                                            if($linha['situacao'] == 'vendido'){
                                        ?>

                                            <button class="btn btn-success btn-sm disabled container" type="button">                                                        

                                                vendido
                                                
                                            </button>

                                        <?php } ?>

                                        <?php
                                            if($linha['situacao'] == 'em estoque'){
                                        ?>

                                            <button class="btn btn-warning btn-sm disabled container" type="button">                                                        

                                                em estoque
                                                
                                            </button>

                                        <?php } ?>

                                        <?php
                                            if($linha['situacao'] == 'em preparacao'){
                                        ?>

                                            <button class="btn btn-secondary btn-sm disabled container" type="button">                                                        

                                                em preparação
                                                
                                            </button>

                                        <?php } ?>

                                        </div>

                                    </td>

                                    <td>

                                        <div class="dropdown">

                                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                <i class="bi bi-gear-fill"></i>

                                                opções

                                            </button>

                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                
                                                <li>

                                                    <a class="dropdown-item" href="editar.php?id=<?php echo $linha['id'] ?>">

                                                    <i class="bi bi-pencil-fill"></i> editar</a>

                                                </li>

                                                <li>

                                                    <a class="dropdown-item text-danger" href="excluirCarros.php?id=<?php echo $linha['id']; ?>">

                                                    <i class="bi bi-trash3-fill"></i> excluir</a>
                                                </li>

                                            </ul>

                                        </div>

                                    </td>
                                </tr>

                            <?php }}}};

                            if(!isset($_POST['busca'])){

                                $consulta = $pdo->query("SELECT * FROM carros;");
                                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

                                    if($_SESSION['grupo_usuario'] == 2 && $_SESSION['login'] == $linha['login']){

                                        ?>

                                    <tr class="text-center">

                                    <th scope="row"><?php echo $linha['id'] ?></th>

                                    <td><?php echo $linha['modelo'] ?></td>

                                    <td><?php echo $linha['placa'] ?></td>

                                    <td><?php echo $linha['marca'] ?></td>

                                    <td><?php echo $linha['cor'] ?></td>

                                    <td><?php echo $linha['ano'] ?></td>

                                    <td><?php echo ucfirst($linha['login']) ?></td>

                                    <td>

                                        <div>

                                        <?php
                                            if($linha['situacao'] == 'vendido'){
                                        ?>

                                            <button class="btn btn-success btn-sm disabled container" type="button">                                                        

                                                vendido
                                                
                                            </button>

                                        <?php } ?>

                                        <?php
                                            if($linha['situacao'] == 'em estoque'){
                                        ?>

                                            <button class="btn btn-warning btn-sm disabled container" type="button">                                                        

                                                em estoque
                                                
                                            </button>

                                        <?php } ?>

                                        <?php
                                            if($linha['situacao'] == 'em preparacao'){
                                        ?>

                                            <button class="btn btn-secondary btn-sm disabled container" type="button">                                                        

                                                em preparação
                                                
                                            </button>

                                        <?php } ?>

                                        </div>

                                    </td>

                                    <td>

                                        <div class="dropdown">

                                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                <i class="bi bi-gear-fill"></i>

                                                opções

                                            </button>

                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                
                                                <li>

                                                    <a class="dropdown-item" href="editar.php?id=<?php echo $linha['id'] ?>">

                                                    <i class="bi bi-pencil-fill"></i> editar</a>

                                                </li>

                                                <li>

                                                    <a class="dropdown-item text-danger" href="controler/excluirCarros.php?id=<?php echo $linha['id']; ?>">

                                                    <i class="bi bi-trash3-fill"></i> excluir</a>
                                                </li>

                                            </ul>

                                        </div>

                                    </td>
                                    </tr>

                                    <?php } 

                                    if($_SESSION['grupo_usuario'] == 1){

                                        ?>

                                        <tr class="text-center">

                                            <th scope="row"><?php echo $linha['id'] ?></th>

                                            <td><?php echo $linha['modelo'] ?></td>

                                            <td><?php echo $linha['placa'] ?></td>

                                            <td><?php echo $linha['marca'] ?></td>

                                            <td><?php echo $linha['cor'] ?></td>

                                            <td><?php echo $linha['ano'] ?></td>

                                            <td><?php echo ucfirst($linha['login']) ?></td>

                                            <td>

                                                <div>

                                                <?php
                                                    if($linha['situacao'] == 'vendido'){
                                                ?>

                                                    <button class="btn btn-success btn-sm disabled container" type="button">                                                        

                                                        vendido
                                                        
                                                    </button>

                                                <?php } ?>

                                                <?php
                                                    if($linha['situacao'] == 'em estoque'){
                                                ?>

                                                    <button class="btn btn-warning btn-sm disabled container" type="button">                                                        

                                                        em estoque
                                                        
                                                    </button>

                                                <?php } ?>

                                                <?php
                                                    if($linha['situacao'] == 'em preparacao'){
                                                ?>

                                                    <button class="btn btn-secondary btn-sm disabled container" type="button">                                                        

                                                        em preparação
                                                        
                                                    </button>

                                                <?php } ?>

                                                </div>

                                            </td>
                                            
                                            <td>

                                                <div class="dropdown">

                                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                        <i class="bi bi-gear-fill"></i>

                                                        opções

                                                    </button>

                                                    <ul class="dropdown-menu dropdown-menu-sm">
                                                        
                                                        <li>

                                                            <a class="dropdown-item" href="editar.php?id=<?php echo $linha['id'] ?>">

                                                            <i class="bi bi-pencil-fill"></i> editar</a>

                                                        </li>

                                                        <li>

                                                            <a class="dropdown-item text-danger" href="controler/excluirCarros.php?id=<?php echo $linha['id']; ?>">

                                                            <i class="bi bi-trash3-fill"></i> excluir</a>
                                                        </li>

                                                    </ul>

                                                </div>

                                            </td>
                                        </tr>

                                    <?php } ?>

                                <?php } ?>

                            <?php } ?>

                        </tbody>
                        
                    </table>

                </div>

            </div>

        </div>

        <?php

        if(isset($_GET['erro']) && $_GET['erro'] == 003){ ?>
           
           <script>
            alert('Informe usuario ou administrador.')
           </script>

        <?php 
        }

        if(isset($_GET['erro']) && $_GET['erro'] == 004){ ?>
           
           <script>
            alert('Senhas não conferem.')
           </script>

        <?php 
        }  

        if(isset($_GET['user']) && $_GET['user'] == 'add'){ ?>
        
        <script>
            alert('Usuario criado com sucesso!')
        </script>

        <?php 
        }
        
        if(isset($_GET['erro']) && $_GET['erro'] == '005'){ ?>
        
        <script>
            alert('Falha na criação do usuario')
        </script>

        <?php 
        }
        ?>

    </body>

</html>