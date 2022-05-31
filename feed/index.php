<?php
session_start(
    [
        'cookie_lifetime' => 4000,
    ]
);
if (!isset($_SESSION['id'])) {
    header('Location: ../index.php');
    exit();
}

// CHAMA A CONEXÃO MYSQL "APENAS UMA VEZ NA PAGE"
include_once("../dbConexao.php");

// EFETUA O SELECT
$sql = "SELECT * FROM usuario WHERE (cod = '" . $_SESSION['id'] . "')";
$resultado = $conexao->query($sql);
$usuario = mysqli_fetch_assoc($resultado);

// VARIAVEIS COM OS NOMES
$nomeUsuario = $usuario['nome'];
$nomeCompleto = $usuario['nome'] . " " . $usuario['sobrenome'];

$username = $usuario['username'];
?>


<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Facebook</title>
    <!-- Ícone da página -->
    <link rel="icon" href="../imgs/facebook-icon.png">

    <meta content="Seu Facebook clone favorito" name="description">
    <meta content="Facebook, rede social" name="keywords">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <link rel="stylesheet" href="../css/main.css">

    <link rel="stylesheet" href="../css/modal.css">

</head>

<body>

    <!-- Navbar -->
    <header class="nav-margin">
        <?php
        require("includes/navbar.php");
        ?>
    </header>


    <main>
        <div class="container-fluid">
            <div class="row separar-posicoes">
                <div class="d-none d-md-flex col-md-2 col-lg-3 sidebar-esquerdo">
                    <!-- Sidebar esquerdo -->
                    <?php
                    require("includes/sidebaresquerdo.php");
                    ?>
                </div>

                <div class="col-sm-12 col-md-10 col-lg-6 mt-3">
                    <!-- Conteudo principal -->
                    <div class="container-fluid conteudos">

                        <!-- AREA DE STORIES -->
                        <section class="mb-4" id="cmp-story">
                            <div class="card-group">

                                <div class="card" id="card-criar-story">
                                    <?php echo "<img class='card-img' src='" . "../perfil/" . $username . "/foto-perfil.jpg" . "' alt='foto-do-perfil'>"; ?>
                                    <div class="story-txt-overlay bg-light w-100 p-1">
                                        <button class="bg-primary text-white">+</button>
                                        <h5 class="card-title">Criar story</h5>
                                    </div>
                                </div>

                                <div class="card text-white" id="card-criar-story">
                                    <img src="../imgs/mineirao.jpg" class="card-img" alt="...">
                                    <div class="story-txt-overlay w-100 p-1">
                                        <h5 class="card-title">Mário</h5>
                                    </div>
                                </div>

                                <div class="card text-white" id="card-criar-story">
                                    <img src="../imgs/mineirao.jpg" class="card-img" alt="...">
                                    <div class="story-txt-overlay w-100 p-1">
                                        <h5 class="card-title">Mário</h5>
                                    </div>
                                </div>

                                <div class="card text-white d-none d-md-flex" id="card-criar-story">
                                    <img src="../imgs/mineirao.jpg" class="card-img" alt="...">
                                    <div class="story-txt-overlay w-100 p-1">
                                        <h5 class="card-title">Mário</h5>
                                    </div>
                                </div>

                                <div class="card text-white d-none d-md-flex" id="card-criar-story">
                                    <img src="../imgs/mineirao.jpg" class="card-img" alt="...">
                                    <div class="story-txt-overlay w-100 p-1">
                                        <h5 class="card-title">Mário</h5>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- AREA DE POSTAR NOVO POST -->
                        <section id="cmp-new-post">
                            <div class="box-publicacao">
                                <div class="row" data-bs-toggle="modal" data-bs-target="#modalCriarPub">
                                    <div class="col-2 d-flex justify-content-center">
                                        <?php echo "<img class='img-perfil' src='" . "../perfil/" . $username . "/foto-perfil.jpg" . "' alt='foto-do-perfil'>"; ?>
                                    </div>
                                    <div class="col-10">
                                        <input class="w-100" type="button" value="<?php echo 'No que você está pensando, ' . $nomeUsuario . '?';  ?>">
                                    </div>
                                </div>
                                <hr>
                                <div id="btnListPub">
                                    <button class="btn">
                                        <img src="../icons/filmadora.png">
                                        <p>Vídeo ao vivo</p>
                                    </button>
                                    <button class="btn">
                                        <img src="../icons/galeria.png">
                                        <p>Foto/video</p>
                                    </button>
                                    <button class="btn d-none d-lg-flex">
                                        <img src="../icons/rosto-sorridente.png">
                                        <p>Sentimento/atividade</p>
                                    </button>
                                </div>

                            </div>
                        </section>

                        <!-- FEED DE NOTICIAS -->
                        <section class="mt-4 mb-5" id="feed">

                            <?php
                            // PEGA TODOS OS POST QUE TEM A VER COM O USUARIO (POR ENQUANTO SO OS QUE O USUARIO POSTA)
                            $sqlPesquisas = "SELECT p.cod AS codPub, p.texto, p.imagem, DATE_FORMAT(p.dataPostagem, '%d do %m às %H:%i') AS dataPub, p.qtdLikes, u.nome, u.sobrenome, u.username FROM postagem p INNER JOIN usuario u ON u.cod = p.codUsuario WHERE (codUsuario =  '" . $_SESSION['id'] . "') ORDER BY p.dataPostagem DESC";
                            $resultado = $conexao->query($sqlPesquisas);

                            // SE NÃO HOUVER NENHUM POST
                            if (mysqli_num_rows($resultado) < 1) {
                                echo "<p class='text-center texto-conclusao mt-4'>Isso é tudo por enquanto, adicione novos amigos para acompanhas suas públicações de perto!</p>";
                            }
                            // EXIBE TODOS OS POSTS
                            else {
                                while ($publicacao = mysqli_fetch_assoc($resultado)) {
                                    echo "<section class='container-postagem'> <div class='postagem mb-4'> <div class='divisoes-cabecalho'>";
                                    echo "<div class='card-cabecalho'>";

                                    // CABECALHO DA PUBLICAÇÃO
                                    echo "<img src='../perfil/" . $publicacao['username'] . "/foto-perfil.jpg' class='card-img-top img-perfil' alt='Imagem'>";
                                    echo "<div class='dados-usuario-post'>";
                                    echo "<h5 class='card-title'>" . $publicacao['nome'] . " " . $publicacao['sobrenome'] . "</h5>";

                                    echo "<span class='info-horario-postagem'> <small class='text-muted'>";
                                    echo $publicacao['dataPub'] . " · </small>";
                                    echo "<img src='../icons/publico.png'> </span> </div> </div>";

                                    echo "<button class='btn' type='button'> ";
                                    echo "<img src='../icons/ver-mais.png'> </button> </div>";

                                    // MIDIA DO POST
                                    echo "<div class='card-corpo'>";
                                    echo "<p>" . $publicacao['texto'] . "</p>";

                                    if ($publicacao['imagem'] == "y") {
                                        echo "<img src='../media/" . $publicacao['codPub'] . "/img-1' name='imagem' class='img-fluid' alt='Imagem'>";
                                    }

                                    echo "<span class='n-curtidas'>  <p>" . $publicacao['qtdLikes'] . " curtidas</p> </span>  <div class='opc-posts'>";

                                    echo "<button class='btn'> <img src='../icons/like.png'> Curtir </button>";

                                    echo "<button class='btn'> <img src='../icons/comentar.png'> Comentar </button>";

                                    echo " <button class='btn'>  <img src='../icons/compartilhar.png'> Compartilhar </button>";

                                    echo "</div> </div>";

                                    // COMENTARIO DO POST
                                    echo "<div class='card-rodape'>";
                                    echo "<img src='../perfil/" . $publicacao['username'] . "/foto-perfil.jpg' class='img-perfil' alt='Imagem'>";
                                    echo "<input type='text' placeholder='Escreva um comentário público...'>";

                                    echo "</div>  </div> </section>";
                                }
                            }
                            ?>
                        </section>
                    </div>
                </div>






                <div class="d-none d-lg-flex col-lg-3 sidebar-direito">
                    <!-- Sidebar direito -->
                    <?php
                    require("includes/contatos.php");
                    ?>
                </div>

            </div>
        </div>
    </main>

    <!-- Modal Criação de publicação -->
    <div class="modal fade" id="modalCriarPub" tabindex="-1" aria-labelledby="modalCriarPub" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-cabecalho">
                        <div class="row w-100">
                            <div class="col-10 d-flex align-items-center justify-content-center">
                                <h3>Criar publicação</h3>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>

                    <form action="../funcionalidades/publicar.php" method="POST" enctype="multipart/form-data" class="modal-corpo cmp-postagem">
                        <div class="cabecalho-modal-perfil">
                            <?php
                            echo "<img src='" . "../perfil/" . $username . "/foto-perfil.jpg" . "' alt='foto-do-perfil'>";

                            echo "<h5>" . $nomeUsuario . "</h5>";
                            ?>
                        </div>

                        <textarea class="form-control mt-3" rows="5" name="texto" placeholder="No que você está pensando, <?php echo $nomeUsuario ?>?"></textarea>

                        <div class="row mt-3 menu-opc-publicacoes">
                            <div class="col-7 d-flex align-items-center">
                                <p>Adicionar à sua apresentação</p>
                            </div>
                            <div class="col-5 d-flex align-items-center opc-btn-pub">
                                <label for="enviar-imagem"><img src="../icons/galeria.png"></label>
                                <input type="file" name="imagem" id="enviar-imagem">
                            </div>
                        </div>

                        <input type="submit" class="w-100 btn btn-primary mt-3" value="Publicar">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../css/bootstrap.bundle.min.js"></script>
</body>

</html>