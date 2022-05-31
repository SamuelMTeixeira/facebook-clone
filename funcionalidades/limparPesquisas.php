<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ../index.php');
    exit();
}


include_once("../dbConexao.php");

$sql = 'DELETE FROM pesquisa WHERE (codUsuario = '.$_SESSION['id'].')';
$resultado = $conexao->query($sql);

if($resultado === false){
    echo "<h4>Erro: " . mysqli_error($conexao) . "</h4>";
}
else {
    header('Location:../feed/');
}

?>
