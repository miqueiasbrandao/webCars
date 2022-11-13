<?php include 'controler/validarSession.php'; ?>
<?php if($_SESSION['grupo_usuario'] != 1){
    header('Location: index.php?autenticacao=erro002');
} ?>

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

                    <i class="fa-solid fa-chart-pie"></i>
                    Dashboard /
                   
                    <?php
                    if($_SESSION['grupo_usuario'] == 1){ ?>
                    <a href="dashboard.php" class="btn btn-primary btn-sm">
                    <i class="bi bi-arrow-clockwise"></i>
                    Atualizar
                    </a>
                    <?php } ?>

                </h4>

            </div>

            <div class="row my-2 fadeIn">

                <div class="col-md"></div>

            </div>

            <?php include 'controler/conexaoSql.php';

            $vendido = 0;
            $emPreparacao = 0;
            $emEstoque = 0;    

            $consulta = $pdo->query("SELECT * FROM carros;");
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

                if($linha['situacao'] == 'em preparacao'){
                    $emPreparacao += 1;
                }

                if($linha['situacao'] == 'em estoque'){
                    $emEstoque += 1;
                }

                if($linha['situacao'] == 'vendido'){
                    $vendido += 1;
                }

            }
            ?>

            <style>
                #teste :hover{
                    top:-6px;
                    transition: all .2s ease-in-out;
                }                
            </style>
      
            
            <div class="row animate slideIn" id="teste">

                    <a style="text-decoration: none; color: black; width: 20rem;" href="dashboard.php?consulta=empreparacao" class="card col-md-4 mx-3 ms-5 shadow-lg p-3 mb-5 bg-body">
                        <div class="card-body">
                            <h5 class="card-title text-center">Em preparação</h5>
                            <h1 class="card-subtitle mb-2 text-center my-3"><i class="fa-solid fa-hand-sparkles"><i class="fa-solid fa-wand-magic-sparkles"></i></i></h1>
                            <hr class="hr hr-blurry" />
                            <h1 class="card-text text-center alert alert-secondary " role="alert"><?php print_r($emPreparacao) ?></h1>
                        </div>
                    </a>

                    <a style="text-decoration: none; color: black; width: 20rem;" href="dashboard.php?consulta=emestoque" class="card col-md-4 mx-3 shadow-lg p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                            <h5 class="card-title text-center">Em estoque</h5>
                            <h1 class="card-subtitle mb-2 text-center my-3"><i class="fa-solid fa-car-side"><i class="fa-solid fa-comments-dollar"></i></i></h1>
                            <hr class="hr hr-blurry">
                            <h1 class="card-text text-center alert alert-warning " role="alert"><?php print_r($emEstoque) ?></h1>
                        </div>
                    </a>

                    <a style="text-decoration: none; color: black; width: 20rem;" href="dashboard.php?consulta=vendido" class="card col-md-4 mx-3 shadow-lg p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                            <h5 class="card-title text-center">Vendido</h5>
                            <h1 class="card-subtitle mb-2 text-center my-3"><i class="fa-regular fa-circle-check"></i><i class="fa-solid fa-comment-dollar"></i></i></h1>
                            <hr class="hr hr-blurry" />
                            <h1 class="card-text text-center alert alert-success" role="alert"><?php print_r($vendido) ?></h1>
                        </div>
                    </a>

                    
            </div>  
                      
            
           <?php
                if(isset($_GET['consulta']) && $_GET['consulta'] == 'empreparacao'){ ?>
            
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

                                </tr>

                            </thead>
                            <tbody>
                                <?php
                            include 'controler/conexaoSql.php';
                            $consulta = $pdo->query("SELECT * FROM carros;");
                            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                if($linha['situacao'] == 'em preparacao'){   
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

                                            <button class="btn btn-secondary btn-sm disabled container" type="button">                                                        

                                                Em preparação
                                                
                                            </button>

                                        </div>

                                    </td>

                                <tr>
                                <?php } ?>
                            <?php } ?>

                            </tbody>
                        
                        </table>

                    </div>
                
                <?php } ?>

            <?php if(isset($_GET['consulta']) && $_GET['consulta'] == 'emestoque'){ ?>
            
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

                            </tr>

                        </thead>
                        <tbody>
                            <?php
                        include 'controler/conexaoSql.php';
                        $consulta = $pdo->query("SELECT * FROM carros;");
                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            if($linha['situacao'] == 'em estoque'){   
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

                                        <button class="btn btn-warning btn-sm disabled container" type="button">                                                        

                                            Em Estoque
                                            
                                        </button>

                                    </div>

                                </td>

                            <tr>
                            <?php } ?>
                        <?php } ?>

                        </tbody>

                    </table>

                    </div>

            <?php } ?>

            <?php if(isset($_GET['consulta']) && $_GET['consulta'] == 'vendido'){ ?>
            
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

                            </tr>

                        </thead>
                        <tbody>
                            <?php
                        include 'controler/conexaoSql.php';
                        $consulta = $pdo->query("SELECT * FROM carros;");
                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            if($linha['situacao'] == 'vendido'){   
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

                                        <button class="btn btn-success btn-sm disabled container" type="button">                                                        

                                            Vendido
                                            
                                        </button>

                                    </div>

                                </td>

                            <tr>
                            <?php } ?>
                        <?php } ?>

                        </tbody>

                    </table>

                    </div>

            <?php } ?>


        </div>

    </div>

</body>