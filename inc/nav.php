<nav class="navbar navbar-expand-lg bg-light fadeIn" id="nav">
    <div class="container">

        <?php if($_SESSION['grupo_usuario'] == 1){ ?>
        <a class="navbar-brand me-3" href="dashboard.php">
            WebCar
        </a> 
        <?php } ?>
        
        <?php if($_SESSION['grupo_usuario'] == 2){ ?>
        <a class="navbar-brand me-3" href="listagem.php">
            WebCar
        </a> 
        <?php } ?>
        

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                    if($_SESSION['grupo_usuario'] == 1){
                ?>
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="dashboard.php"><i class="fa-solid fa-chart-pie"></i> Dashboard</a>
                    </li>
                <?php
                    }
                ?>
                <li class="nav-item me-3">
                    <a class="nav-link active" aria-current="page" href="listagem.php"><i class="fa-solid fa-table-list"></i> Listagem</a>
                </li>
            
                <li class="nav-item me-3">
                    
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#sobre"><i class="fa-solid fa-circle-info"></i> Sobre</a>
                </li>
            </ul>
            <div class="topbar-divider d-sm-block"></div>
            <form class="d-flex">
                <div style="z-index: 99999;" class="dropdown position relative dropstart" id="dropdown">
                <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 <i class="bi bi-person-lines-fill"> </i><?php print_r(ucfirst($_SESSION['login'])); ?>
                </button>
                <ul class="dropdown-menu dropdown-center">

                    <?php
                    if($_SESSION['grupo_usuario'] == 1){ 
                    ?>
                        <li><a id="a" href="#" class="dropdown-item position absolute" data-bs-toggle="modal" data-bs-target="#criarUsuario"><i class="bi bi-person-plus-fill"></i> Criar Novo Usuario </a></li>
                    <?php           
                    }
                    ?>
                    
                        <li><a id="a" class="dropdown-item text-danger position absolute" href="./controler/logoff.php"><i class="bi bi-box-arrow-left"></i> Logoff</a></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
    
</nav>
