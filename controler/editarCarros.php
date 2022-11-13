
<?php
session_start();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';


$editar = null;
include 'conexaoSql.php';

$consulta = $pdo->query("SELECT * FROM carros;");

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

 if($id == $linha['id']){
    $editar = array(
        'id' => $linha['id'],
        'modelo' => $linha['modelo'],
        'placa' => $linha['placa'],
        'cor' => $linha['cor'],
        'ano' => $linha['ano'],
        'login' => $_SESSION['login'],
        'situacao' => $_SESSION['situacao'],
    );
 }

}

//header("Location: listagem.php");

?>