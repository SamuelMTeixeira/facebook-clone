<html lang="pt-br">

<head>
    <!-- Estilos custimizados CSS -->
    <link rel="stylesheet" href="../css/cabecalho.css">
</head>

<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <!-- COMPONENTES DO LADO ESQUERDO -->
                <section class="le" data-bs-toggle="modal" data-bs-target="#modalSearch">
                    <a href="#"><img src="../imgs/facebook-icon.png" width="36px" height="36px"></a>
                    <span class="in-search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                        <input type="text" placeholder="Pesquisar no facebook" class="in-search d-none d-md-flex" autocomplete="false">
                    </span>
                </section>

                <!-- COMPONENTES DO LADO CENTRAL -->
                <section class="lc d-none d-md-flex d-lg-flex">

                    <a class="home opc-selected" href="#">
                        <img src="../icons/home-selected.png" id="btnHome">
                    </a>

                    <a class="marketplace opc" href="#">
                        <img src="../icons/marketplace.png" id="btnHome">
                    </a>

                    <a class="comunidade opc" href="#">
                        <img src="../icons/comunidade.png" id="btnHome">
                    </a>
                </section>

                <!-- COMPONENTES DO LADO DIREITO -->
                <section class="ld">
                    <a href="#" class="d-none d-lg-flex">
                        <span class="profile">
                            <?php echo "<img class='img-perfil' src='" . "../perfil/" . $username . "/foto-perfil.jpg" . "' alt='foto-do-perfil'>"; ?>

                            <?php echo "<p>" . $nomeUsuario . "</p>";  ?>
                        </span>
                    </a>

                    <button class="ms-2 menus">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                        </svg>
                    </button>

                    <button class="ms-2 menus">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                            <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>

                        <span class="qtd-notificacoes translate-middle badge rounded-pill bg-danger">1</span>
                    </button>

                    <button class="ms-2 menus">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                        </svg>

                        <span class="qtd-notificacoes translate-middle badge rounded-pill bg-danger">9</span>
                    </button>

                    <div class="dropdown">
                        <button class="ms-2 menus dropdown-toggle" type="button" id="dropdownOpcoes" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                        </button>

                        <!-- LISTA DE OPÇÕES DO MENU "VER MAIS" -->
                        <ul class="dropdown-menu" aria-labelledby="dropdownOpcoes" id="dpOPC">
                            <li>
                                <span class="dropdown-item">
                                    <?php echo "<img src='" . "../perfil/" . $username . "/foto-perfil.jpg" . "' class='ft-perfil' alt='foto-do-perfil'>"; ?>

                                    <div class="desc-perfil">
                                        <?php echo "<p class='name-profile'>" . $nomeCompleto . "</p>";  ?>
                                        <p>Veja seu perfil</p>
                                    </div>
                                </span>
                            </li>
                            <hr>
                            <li>
                                <span class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                    </svg>
                                    <p>Configurações e privacidade</p>
                                </span>
                            </li>

                            <li>
                                <span class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                                    </svg>
                                    <p>Ajuda e suporte</p>
                                </span>
                            </li>

                            <li>
                                <span class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                                        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                                    </svg>
                                    <p>Tela e acessibilidade</p>
                                </span>
                            </li>

                            <li>
                                <a href="../sair.php" class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                                        <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                                    </svg>
                                    <p>Sair</p>
                                </a>
                            </li>
                        </ul>
                    </div>

                </section>

            </div>
        </nav>
    </header>

    <!-- Modal Pesquisa -->
    <div class="modal fade" id="modalSearch" tabindex="-1" aria-labelledby="modalSearch" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-cabecalho">
                        <button type="button" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                        <span class="in-search">
                            <input type="text" placeholder="Pesquisar no facebook" class="in-search" id="search-for" autofocus autocomplete="false">
                        </span>
                        <br>
                    </div>

                    <div class="modal-corpo">
                        <?php
                        // EFETUA O SELECT
                        $sqlPesquisas = "SELECT * FROM pesquisa WHERE (codUsuario = '" . $_SESSION['id'] . "')";
                        $resultado = $conexao->query($sqlPesquisas);

                        if (mysqli_num_rows($resultado) < 1) {
                            echo "<p class='text-center'>Nenhuma pesquisa recente</p>";
                        } else {
                            // CABEÇALHO DO MENU DE PESQUISAS RECENTES (TITULO E BOTAO)
                            echo "<form class='w-100 mb-3 list-pesquisas-cabecalho d-flex align-items-center justify-content-between' method='post' action='../funcionalidades/limparPesquisas.php'> <h3>Pesquisas recentes</h3> <button type='submit'>Limpar</button> </form>";

                            // LISTA DE PESQUISAS
                            echo "<table class='table table-borderless w-100' id='tabela-pesquisas'>";
                            echo "<tbody>";

                            while ($pesquisa = mysqli_fetch_assoc($resultado)) {
                                echo "<tr> <th><button><img src='../icons/recente.png'></button> </th>";
                                echo '<td>' . $pesquisa['conteudo'] . '</td>';
                                echo "</tr>";
                            }

                            echo "</tbody>";
                            echo "</table>";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/scripts.js"></script>
</body>

</html>