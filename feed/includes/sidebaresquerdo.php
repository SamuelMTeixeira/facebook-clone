<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Estilos custimizados CSS -->
    <link rel="stylesheet" href="../css/aside.css">
</head>

<body>
    <aside class="aside-esq mt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <?php echo "<img class='img-perfil' src='" . "../media/photo/" . $username . ".jpg" . "' alt='foto-do-perfil'>"; ?>
                    <?php echo "<p>" . $nomeUsuario . "</p>";  ?>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="../icons/amigos.png">
                    <p>Amigos</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="../icons/marketplace-lateral.png">
                    <p>Marketplace</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="../icons/comunidade-lateral.png">
                    <p>Comunidades</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="../icons/watch.png">
                    <p>Watch</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="../icons/lembrancas.png">
                    <p>Lembranças</p>
                </a>
            </li>


            <div class="d-none" id="opc-add-atividades">

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="../icons/ajuda-comunidade.png">
                        <p>Ajuda da comunidade</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="../icons/covid.png">
                        <p>Covid 19: Central de inform.</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="../icons/favoritos.png">
                        <p>Favoritos</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="../icons/clima.png">
                        <p>Clima</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="../icons/eventos.png">
                        <p>Eventos</p>
                    </a>
                </li>
            </div>

            <li class="nav-item" onclick="verMaisAtividades()">
                <a class="nav-link" href="#">
                    <button id="btn-atv">
                        <img src="../icons/seta-baixo-aberta.png" class="ms-2">
                    </button>
                    <p>Ver mais</p>
                </a>
            </li>
        </ul>

        <hr>

        <div class="seus-atalhos">
            <span>
                <h3 class="me-5 ms-3 titulo">Seus atalhos</h3>
                <a href="#" class="ms-5 text-primary p-1">Editar</a>
            </span>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/SamuelMTeixeira">
                    <img src="../icons/github.png">
                    <p>GitHub</p>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <script src="../js/scripts.js"></script>
</body>

</html>