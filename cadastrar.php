<?php
session_start();

$user_nome = $_POST['nome'];
$user_sobrenome = $_POST['sobrenome'];
$user_senha = md5($_POST['senha']);
$user_email = $_POST['email'];

$user_dia = $_POST['dia'];
$user_mes = $_POST['mes'];
$user_ano = $_POST['ano'];

$user_sexo = $_POST['sexo'];

// CHAMA A CONEXÃO MYSQL "APENAS UMA VEZ NA PAGE"
include_once("dbConexao.php");

$sql = "INSERT INTO usuario (nome, sobrenome, senha, email, sexo, aniversario, tipo) VALUES ('" . $user_nome . "','" . $user_sobrenome . "', '" . $user_senha . "','" . $user_email . "', '" . $user_sexo . "', '" . $user_ano . "-" . $user_mes . "-" . $user_dia . "', '0')";
$resultado = $conexao->query($sql);

if ($resultado == false) {
    echo "<h4>Erro: " . mysqli_error($conexao) . "</h4>";
} else {
    //O insert_id PEGA O ID GERADO NO INSERT DO SQL E 
    $newId = $conexao->insert_id;

    $sql = "SELECT * FROM usuario WHERE cod = " . $newId;
    $resultado = $conexao->query($sql);
    $usuario = mysqli_fetch_assoc($resultado);

    // CRIA A PASTA DO PERFIL DO USUARIO E ADD A FOTO

    // CRIA UM NOME DE USUARIO E CRIA A PASTA DO PERFIL DELA
    $username = strtolower($usuario['nome']) . "-" . strtolower($usuario['sobrenome']) . "-" . $newId;

    // COLOCA A FOTO DE PERFIL PADRAO NELA
    if (copy('media/perfil-undefined.jpg', 'media/photo/' . $username . '.jpg')) {

        // CADASTRA O USERNAME DO PERFIL DO USUARIO
        $sql = "UPDATE usuario SET username = '" . $username . "' WHERE cod = " . $newId;
        $resultado = $conexao->query($sql);

        // INICIAR A SESSÃO E MANDA PARA A PAGINA INICIAL
        $_SESSION['id'] = $newId;
        header('Location:feed/');
    }
}
