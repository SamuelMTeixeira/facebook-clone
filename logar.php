    <?php
    session_start();
    $user_login = $_POST['login'];
    $user_senha = $_POST['senha'];

    // CHAMA A CONEXÃO MYSQL "APENAS UMA VEZ NA PAGE"
    include_once("dbConexao.php");

    $sql = "SELECT * FROM usuarios WHERE nome LIKE '" . $user_login . "' AND senha LIKE MD5('" . $user_senha . "')";
    $resultado = $conexao->query($sql);

    if (mysqli_num_rows($resultado) < 1) {
        header('Location:index.php');
    } else {
        $usuario = mysqli_fetch_assoc($resultado);

        $_SESSION['id'] = $usuario['cod'];

        if ($usuario['tipo'] == 0)
            header('Location:usuario/index.php');
        elseif ($usuario['tipo'] == 1)
            header('Location:usuario/index.php');
        else {
            echo "Permissão incorreta";
            exit();
        }
    }
    ?>