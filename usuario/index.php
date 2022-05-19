<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: ../index.php');
    exit();
}

// CHAMA A CONEXÃO MYSQL "APENAS UMA VEZ NA PAGE"
include_once("../dbConexao.php");

// EFETUA O CRUD
$sql = "SELECT * FROM usuarios WHERE (cod = '" . $_SESSION['id'] . "')";
$resultado = $conexao->query($sql);
$usuario = mysqli_fetch_assoc($resultado);

// VARIAVEIS COM OS NOMES
$nomeUsuario = $usuario['nome'];
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
                                    <img src="../imgs/perfil-undefined.png" class="card-img" alt="...">
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

                        <!-- AREA DE POSTAGEM -->
                        <section id="cmp-new-post">
                            <div class="box-publicacao">
                                <img class="img-perfil" src="../imgs/perfil-undefined.png">
                                <input type="button" value="<?php echo 'No que você está pensando, ' . $nomeUsuario . '?';  ?>">
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

                            <div class="postagem">
                                <!-- CABECALHO DO POST -->
                                <div class="divisoes-cabecalho">
                                    <div class="card-cabecalho">
                                        <img src="../imgs/perfil-undefined.png" class="card-img-top img-perfil" alt="Imagem">
                                        <div class="dados-usuario-post">
                                            <h5 class="card-title">Samuel M. Teixeira</h5>
                                            <span class="info-horario-postagem">
                                                <small class="text-muted">Ontem às 18hrs · </small>
                                                <img src="../icons/publico.png">
                                            </span>
                                        </div>
                                    </div>
                                    <button class="btn" type="button">
                                        <img src="../icons/ver-mais.png">
                                    </button>

                                </div>

                                <!-- MIDIA DO POST -->
                                <div class="card-corpo">
                                    <p>Mais um dia passando raiva com os bugs... kkk</p>
                                    <img src="../imgs/perfil-undefined.png" name="imagem" class="card-img-top" alt="Imagem">
                                    <span class="n-curtidas">
                                        <p>3 curtidas</p>
                                    </span>
                                    <div class="opc-posts">
                                        <button class="btn">
                                            <img src="../icons/like.png">
                                            Curtir
                                        </button>
                                        <button class="btn">
                                            <img src="../icons/comentar.png">
                                            Comentar
                                        </button>
                                        <button class="btn">
                                            <img src="../icons/compartilhar.png">
                                            Compartilhar
                                        </button>
                                    </div>
                                </div>

                                <!-- COMENTARIO DO POST -->
                                <div class="card-rodape">
                                    <img class="img-perfil" src="../imgs/perfil-undefined.png">
                                    <input type="text" placeholder="Escreva um comentário público...">
                                </div>
                            </div>
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



    <script src="../css/bootstrap.bundle.min.js"></script>
</body>

</html>