<?php

echo '<pre>';
print_r($_POST);
echo '<pre>';

$novoUsuario = array();
$login = null;
$senhaValidada = null;
$grupo_usuario = null;


if($_POST['login'] == "" || $_POST['senhaOne'] == "" || $_POST['senhaTwo'] == ""){
    header('Location: ../index.php?erro=005');
    exit;
}

if(isset($_POST['login']) && isset($_POST['senhaOne']) && isset($_POST['senhaTwo'])){

    
    if($_POST['senhaOne'] == $_POST['senhaTwo']){
        $senhaValidada = $_POST['senhaOne'];
        $login = $_POST['login'];

        $novoUsuario = array(
            'usuario' => $login,
            'senha' => $senhaValidada,
            'grupo_usuario' => 2,
        );
    }
    else{
        header('Location: ../index.php?erro=004');
        exit;
    }

include 'conexaoSql.php';

    //inserir usuario
    $stmt = $pdo->prepare('INSERT INTO usuarios (usuario, senha, grupo_usuario) VALUES(:usuario, :senha, :grupo_usuario)');
    $stmt->execute(array(
   
        ':usuario' => $novoUsuario['usuario'],
        ':senha' => $novoUsuario['senha'],
        ':grupo_usuario' => $novoUsuario['grupo_usuario'],
    ));

    header('Location: ../index.php?user=add');
    
}

    else{
    header('Location: ../index.php?erro=005');
    }
?>