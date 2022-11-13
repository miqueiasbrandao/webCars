<?php

session_start();


try {

    include 'conexaoSql.php';
    
  //inserir modelo
  $stmt = $pdo->prepare('INSERT INTO carros (id, modelo, placa, marca, cor, ano, login, situacao) VALUES(:id, :modelo, :placa, :marca, :cor, :ano, :login, :situacao)');
  $stmt->execute(array(

    ':id' => $id,    
    ':modelo' => $_POST['modelo'],
    ':placa' => $_POST['placa'],
    ':marca' => $_POST['marca'],
    ':cor' => $_POST['cor'],
    ':ano' => $_POST['ano'],
    ':login' => $_SESSION['login'],
    ':situacao' => 'em preparacao',
    
  ));


  echo $stmt->rowCount();
} 
catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

header('Location: ../listagem.php');

?>