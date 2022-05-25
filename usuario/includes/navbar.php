<html lang="pt-br">

<head>
    <!-- Estilos custimizados CSS -->
    <link rel="stylesheet" href="../css/cabecalho.css">
</head>

<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <!-- COMPONENTES DO LADO ESQUERDO-->
                <section class="le" data-bs-toggle="modal" data-bs-target="#modalSearch">
                    <a href="#"><img src="../imgs/facebook-icon.png" width="36px" height="36px"></a>
                    <span class="in-search">
                        <img src="../icons/lupa.png" width="20px" class="me-2">
                        <input type="text" placeholder="Pesquisar no facebook" class="in-search d-none d-md-flex">
                    </span>
                </section>

                <!-- COMPONENTES DO LADO CENTRAR-->
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

                <!-- COMPONENTES DO LADO DIREITO-->
                <section class="ld">
                    <a href="#" class="d-none d-lg-flex">
                        <span class="profile">
                            <img class="img-perfil" src="../imgs/perfil-undefined.png">
                            <?php echo "<p>" . $nomeUsuario . "</p>";  ?>
                        </span>
                    </a>

                    <a href="#">
                        <button class="ms-2 menus">
                            <img src="../icons/menu.png">
                        </button>
                    </a>

                    <a href="#">
                        <button class="ms-2 menus">
                            <img src="../icons/messenger.png">
                        </button>
                    </a>

                    <a href="#">
                        <button class="ms-2 menus">
                            <img src="../icons/sino.png">
                        </button>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalData">
                        <button class="ms-2 menus">
                            <img src="../icons/seta-baixo.png">
                        </button>
                    </a>

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
                        <button type="button" data-bs-dismiss="modal" aria-label="Close"><img src="../icons/seta-voltar.png"></button>
                        <span class="in-search">
                            <input type="text" placeholder="Pesquisar no facebook" class="in-search" autofocus>
                        </span>
                        <br>
                    </div>

                    <div class="modal-corpo">
                        <p>Nenhuma pesquisa recente</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Perfil -->
    <div class="modal fade" id="modalData" tabindex="-1" aria-labelledby="modalData" aria-hidden="true">
        <div class="modal-dialog modal-dialog-data">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row opc pt-2 pb-1">
                        <div class="col-md-2 ft-perfil">
                            <img src="../imgs/perfil-undefined.png">
                        </div>
                        <div class="col-md-10 desc-perfil ps-3">
                            <?php echo "<h3>" . $nomeUsuario . "</h3>";  ?>
                            <p>Veja seu perfil</p>
                        </div>
                    </div>
                    <hr>

                    <div class="row opc pt-2">
                        <div class="col-md-1 d-flex justify-content-center align-items-center">
                            <button class="ms-2 mb-3 menu-opc">
                                <img src="../icons/messenger.png">
                            </button>
                        </div>
                        <div class="col-md-11 desc-perfil justify-content-center align-items-center">
                            <h3>Dar feedback</h3>
                            <p>Ajude-nos a melhorar o facebook</p>
                        </div>
                    </div>
                    <hr>

                    <div class="row opc coluna">
                        <div class="col-md-1 d-flex justify-content-center align-items-center">
                            <button class="ms-2 menu-opc">
                                <img src="../icons/configuracoes.png">
                            </button>
                        </div>
                        <div class="col-md-11 desc-perfil d-flex align-items-center">
                            <h3>Configurações e privacidade</h3>
                        </div>
                    </div>

                    <div class="row opc coluna">
                        <div class="col-md-1 d-flex justify-content-center align-items-center">
                            <button class="ms-2 menu-opc">
                                <img src="../icons/duvida.png">
                            </button>
                        </div>
                        <div class="col-md-11 desc-perfil d-flex align-items-center">
                            <h3>Ajuda e suporte</h3>
                        </div>
                    </div>

                    <div class="row opc coluna">
                        <div class="col-md-1 d-flex justify-content-center align-items-center">
                            <button class="ms-2 menu-opc">
                                <img src="../icons/lua.png">
                            </button>
                        </div>
                        <div class="col-md-11 desc-perfil d-flex align-items-center">
                            <h3>Tela e acessibilidade</h3>
                        </div>
                    </div>

                    <a href="../sair.php">
                        <div class="row opc coluna">
                            <div class="col-md-1 d-flex justify-content-center align-items-center">
                                <button class="ms-2 menu-opc">
                                    <img src="../icons/sair.png">
                                </button>
                            </div>
                            <div class="col-md-11 desc-perfil d-flex align-items-center">
                                <h3>Sair</h3>
                            </div>
                        </div>
                    </a>

                    <div class="modal-corpo">
                        <p class="text-muted">Privacidade · Termos · Publicidade · Escolhas para anúncios · Cookies · ·
                            Meta © 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../css/bootstrap.bundle.min.js"></script>
</body>

</html>