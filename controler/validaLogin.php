<?php

session_start();
$usuarioAutenticado = false;
$usuario_id = null;
$grupo_usuario = null;

include 'conexaoSql.php';

$consulta = $pdo->query("SELECT * FROM usuarios;");

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        
    if($_POST['login'] == $linha['usuario'] && $_POST['senha'] == $linha['senha']){
      
      
        $usuarioAutenticado = true;
        $usuario_id = $linha['id_usuario'];
        $grupo_usuario = $linha['grupo_usuario'];
    }
}

    if($usuarioAutenticado == true){

        $_SESSION['usuario_id'] = $usuario_id;
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['senha'] = $_POST['senha'];
        $_SESSION['grupo_usuario'] = $grupo_usuario;
        $_SESSION['autenticado'] = 'SIM';

        if($_SESSION['grupo_usuario'] == 1)
        header('Location: ../dashboard.php');

        if($_SESSION['grupo_usuario'] == 2)
        header('Location: ../listagem.php');
    }

    else{
        header('Location: ../index.php?autenticacao=erro001');
    }

    echo '<hr>';
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

?>