<?php

$id = $_GET['id'];

try {

    include 'conexaoSql.php';

    $stmt = $pdo->prepare('DELETE FROM carros WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();


  echo $stmt->rowCount();
} 
catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

header('Location: ../listagem.php');

?>