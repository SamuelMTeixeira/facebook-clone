<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ../index.php');
    exit();
}

$texto = $_POST['texto'];

include_once("../dbConexao.php");

// FAZ O INSERT DA POSTAGEM (definindo como sem imagem )
$sql = "INSERT INTO postagem (codUsuario, texto, dataPostagem, qtdlikes, imagem)  VALUES ('" . $_SESSION['id'] . "', '" . $texto . "', NOW(), 0, 'n')";
$resultado = $conexao->query($sql);

if ($resultado === false) {
    echo "<h4>Erro: " . mysqli_error($conexao) . "</h4>";
} else {
    //O insert_id PEGA O ID GERADO NO INSERT DO SQL E 
    $newId = $conexao->insert_id;

    // LOCAL DO DIRETORIO QUE É PARA CRIAR A PASTA
    $path = '../media/' . $newId . '/';

    // CRIA A PASTA PARA ARMAZENAR AS MIDIAS DO POST
    mkdir($path, 0755, true);

    // SE O USUARIO ENVIOU UMA FT, FAZ O UPDATE NO POST PARA ADD ELA, SE NÃO SO É REDIRECIONADO PARA OUTRA PÁGINA
    if ( !($_FILES['imagem']['error'] == 4)) { 
        $extensao = strtolower(pathinfo(basename($_FILES['imagem']['name']), PATHINFO_EXTENSION));

        move_uploaded_file($_FILES['imagem']['tmp_name'], $path . "img-1." . $extensao);

        // FAZ O UPDADE DA POSTAGEM (ADD que tem imagem )
        $sql = "UPDATE postagem SET imagem = 'y' WHERE cod = " . $newId;
        $resultado = $conexao->query($sql);
    }


    header('Location:../feed/index.php');
}
