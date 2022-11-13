<?php

echo '<pre>';
print_r($_POST);
echo '<pre>';

$novoUsuario = array();
$login = null;
$senhaValidada = null;
$grupo_usuario = null;


if(isset($_POST['administrador']) && isset($_POST['usuario'])){
    header('Location: ../listagem.php?erro=003');

    exit;
}

if(isset($_POST['login']) && isset($_POST['senhaOne']) && isset($_POST['senhaTwo']) && (isset($_POST['usuario']) || isset($_POST['administrador']))){

    
    if($_POST['senhaOne'] == $_POST['senhaTwo']){
        $senhaValidada = $_POST['senhaOne'];
        $login = $_POST['login'];

            if(isset($_POST['administrador'])){
                $grupo_usuario = 1;
            }

            if(isset($_POST['usuario'])){
                $grupo_usuario = 2;
            }

        $novoUsuario = array(
            'usuario' => $login,
            'senha' => $senhaValidada,
            'grupo_usuario' => $grupo_usuario,
        );
    }
    else{
        header('Location: ../listagem.php?erro=004');
        exit;
    }



include 'conexaoSql.php';

    echo '<hr>';
    echo '<pre>';
    print_r($novoUsuario);
    echo '<pre>';

    //inserir usuario
    $stmt = $pdo->prepare('INSERT INTO usuarios (usuario, senha, grupo_usuario) VALUES(:usuario, :senha, :grupo_usuario)');
    $stmt->execute(array(
   
        ':usuario' => $novoUsuario['usuario'],
        ':senha' => $novoUsuario['senha'],
        ':grupo_usuario' => $novoUsuario['grupo_usuario'],
    ));

    header('Location: ../listagem.php?user=add');
    
}

    else{
    header('Location: ../listagem.php?erro=005');
    }
?>