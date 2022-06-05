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
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Facebook</title>
    <!-- Ícone da página -->
    <link rel="icon" href="../imgs/facebook-icon.png">

    <meta content="Seu Facebook clone favorito" name="description">
    <meta content="Facebook, rede social" name="keywords">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Bootstrap Ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

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
                                    <?php echo "<img class='card-img' src='" . "../media/photo/" . $username . ".jpg" . "' alt='foto-do-perfil'>"; ?>
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
                                        <?php echo "<img class='img-perfil' src='" . "../media/photo/" . $username . ".jpg" . "' alt='foto-do-perfil'>"; ?>
                                    </div>
                                    <div class="col-10">
                                        <input class="w-100" type="button" value="<?php echo 'No que você está pensando, ' . $nomeUsuario . '?';  ?>">
                                    </div>
                                </div>
                                <hr>
                                <div id="btnListPub">
                                    <button class="btn btn-vermelho">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-reels-fill" viewBox="0 0 16 16">
                                            <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                            <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z" />
                                        </svg>
                                        <p>Vídeo ao vivo</p>
                                    </button>
                                    <button class="btn color-verde">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                                        </svg>
                                        <p>Foto/video</p>
                                    </button>
                                    <button class="btn d-none d-lg-flex color-amarelo">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-laughing-fill" viewBox="0 0 16 16">
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5c0 .501-.164.396-.415.235C6.42 6.629 6.218 6.5 6 6.5c-.218 0-.42.13-.585.235C5.164 6.896 5 7 5 6.5 5 5.672 5.448 5 6 5s1 .672 1 1.5zm5.331 3a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zm-1.746-2.765C10.42 6.629 10.218 6.5 10 6.5c-.218 0-.42.13-.585.235C9.164 6.896 9 7 9 6.5c0-.828.448-1.5 1-1.5s1 .672 1 1.5c0 .501-.164.396-.415.235z" />
                                        </svg>
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
                                    echo "<img src='" . "../media/photo/" . $publicacao['username'] . ".jpg' class='card-img-top img-perfil' alt='Imagem'>";
                                    echo "<div class='dados-usuario-post'>";
                                    echo "<h5 class='card-title'>" . $publicacao['nome'] . " " . $publicacao['sobrenome'] . "</h5>";

                                    echo "<span class='info-horario-postagem'> <small class='text-muted'>";
                                    echo $publicacao['dataPub'] . " · </small>";
                                    echo "<img src='../icons/publico.png'> </span> </div> </div>";

                                    
                                    echo "<div class='dropdown'> <button class='btn dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false' id='btn-ver-mais' type='button'> ";
                                    echo "<svg xmlns='http://www.w3.org/2000/svg'  width='16' height='16' fill='currentColor' class='bi bi-three-dots' viewBox='0 0 16 16'><path d='M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z' /></svg>";
                                    echo "</button>";
                                    echo "<ul class='dropdown-menu' aria-labelledby='btn-ver-mais'><li>";
                                    echo "<a class='dropdown-item' href='#'> Denunciar Publicação";
                                    echo "</a></li></ul>";
                                    echo "</div> </div>";

                                    // MIDIA DO POST
                                    echo "<div class='card-corpo'>";
                                    echo "<p>" . $publicacao['texto'] . "</p>";

                                    if ($publicacao['imagem'] == "y") {
                                        echo "<img src='../media/" . $publicacao['codPub'] . "/img-1.jpg' name='imagem' class='img-fluid' alt='Imagem'>";
                                    }

                                    echo "<span class='n-curtidas'>  <p>" . $publicacao['qtdLikes'] . " curtidas</p> </span>  <div class='opc-posts'>";

                                    echo "<button class='btn'> <img src='../icons/like.png'> Curtir </button>";

                                    echo "<button class='btn'> <img src='../icons/comentar.png'> Comentar </button>";

                                    echo " <button class='btn'>  <img src='../icons/compartilhar.png'> Compartilhar </button>";

                                    echo "</div> </div>";

                                    // COMENTARIO DO POST
                                    echo "<div class='card-rodape'>";
                                    echo "<img src='../media/photo/" . $username . ".jpg' class='img-perfil' alt='Imagem'>";
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
                            echo "<img src='" . "../media/photo/" . $username . ".jpg" . "' alt='foto-do-perfil'>";

                            echo "<div> <h5>" . $nomeCompleto . "</h5>";
                            echo "<select class='form-select form-select-pequeno'> <option selected> Público </option> </select>";
                            echo "</div>"

                            ?>
                        </div>

                        <textarea class="form-control mt-3" id="cmp-txt" rows="5" name="texto" placeholder="No que você está pensando, <?php echo $nomeUsuario ?>?"></textarea>

                        <div class="d-flex justify-content-end align-items-center menu-sub-opc opc-btn-pub mt-2 dropdown">
                            <button class="btn color-cinza" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
                                </svg>
                            </button>
                        </div>

                        <div class="row mt-3 menu-opc-publicacoes">
                            <div class="col-7 d-flex align-items-center">
                                <p>Adicionar à sua apresentação</p>
                            </div>
                            <div class="col-5 d-flex align-items-center opc-btn-pub">
                                <label for="enviar-imagem">
                                    <span class="btn color-verde">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                                        </svg>
                                    </span>
                                </label>
                                <input type="file" name="imagem" id="enviar-imagem" accept="image/png,image/jpeg,image/jpg">
                            </div>
                        </div>
                        <p class="text-center" id="n-arquivos"></p>
                        <div class="preview-img d-none" id="container-preview">
                        </div>
                        <input type="submit" class="w-100 btn btn-secondary mt-3" id="btnPublicar" disabled value="Publicar">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/validacoes.js"></script>
</body>

</html>