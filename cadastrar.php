<?php
    session_start();

    $user_login = $_POST['login'];
    $user_senha = md5( $_POST['senha']);
    $user_email = $_POST['email'];

    $servidor = 'localhost';
    $usuario = "root";
    $senha = "";
    $database = "edu";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    $sql = "INSERT INTO usuarios (nome, senha, email, tipo) VALUES ('".$user_login."','".$user_senha."','".$user_email."','0')";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado == false) {
        echo "<h4>Erro: ".mysqli_error($conexao)."</h4>";
    } else {
        $_SESSION['user_nome'] = $user_login;

        $_SESSION['id'] = 
        header('Location: usuario/index.php');
    }
    ?>