<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header('Location: ../index.php');
        exit();
    }

    // CHAMA A CONEXÃO MYSQL "APENAS UMA VEZ NA PAGE"
    include_once ("dbConexao.php");

    // EFETUA O CRUD
    $sql = "SELECT * FROM usuarios WHERE (cod = '" . $_SESSION['id'] . "')";
    $resultado = $conexao -> query($sql);
    $usuario = mysqli_fetch_assoc($resultado);


    //  TESTA O RESULTADO
    $nomeUsuario = $usuario['nome'];
    echo "Ola $nomeUsuario";
?>