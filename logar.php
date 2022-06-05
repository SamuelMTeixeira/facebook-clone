<?php
session_start(
    [
        'cookie_lifetime' => 4000,
    ]
);

$user_email = $_POST['email'];
$user_senha = $_POST['senha'];

// CHAMA A CONEXÃO MYSQL "APENAS UMA VEZ NA PAGE"
include_once("dbConexao.php");

$sql = "SELECT * FROM usuario WHERE email LIKE '" . $user_email . "' AND senha LIKE MD5('" . $user_senha . "')";
$resultado = $conexao->query($sql);

if (mysqli_num_rows($resultado) < 1) {
    header('Location:index.php?login=wrong');
    die();
} else {
    $usuario = mysqli_fetch_assoc($resultado);

    $_SESSION['id'] = $usuario['cod'];

    if ($usuario['tipo'] == 0) {
        header('Location: feed/');
    } elseif ($usuario['tipo'] == 1) {
        header('Location: feed/');
    } else {
        echo "Permissão incorreta";
        exit();
    }
}
