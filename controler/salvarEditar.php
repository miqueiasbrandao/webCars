<?php

$id = $_POST['id'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$marca = $_POST['marca'];
$cor = $_POST['cor'];
$ano = $_POST['ano'];
$situacao = $_POST['situacao'];

try {

    include 'conexaoSql.php';

    $stmt = $pdo->prepare('UPDATE carros SET modelo = :modelo, placa = :placa, marca = :marca, cor = :cor, ano = :ano, situacao = :situacao WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':modelo', $modelo);
    $stmt->bindParam(':placa', $placa);
    $stmt->bindParam(':marca', $marca);
    $stmt->bindParam(':cor', $cor);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':situacao', $situacao);
    $stmt->execute();
  
    header('Location: ../listagem.php');
    //echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>