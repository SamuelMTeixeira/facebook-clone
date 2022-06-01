<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Estilos custimizados CSS -->
    <link rel="stylesheet" href="../css/aside.css">
</head>

<body>
    <aside class="aside-esq mt-3">

        <a href="#" class="opc-atv">
            <span class="d-p-flex">
            <?php echo "<img class='img-perfil' src='"."../perfil/". $username . "/foto-perfil.jpg"."' alt='foto-do-perfil'>";?>
                <?php echo "<p>" . $nomeUsuario . "</p>";  ?>
            </span>
        </a>

        <a href="#" class="opc-atv">
            <span class="d-p-flex">
                <img src="../icons/amigos.png">
                <p>Amigos</p>
            </span>
        </a>

        <a href="#" class="opc-atv">
            <span class="d-p-flex">
                <img src="../icons/marketplace-lateral.png">
                <p>Marketplace</p>
            </span>
        </a>

        <a href="#" class="opc-atv">
            <span class="d-p-flex">
                <img src="../icons/comunidade-lateral.png">
                <p>Comunidades</p>
            </span>
        </a>

        <a href="#" class="opc-atv">
            <span class="d-p-flex">
                <img src="../icons/watch.png">
                <p>Watch</p>
            </span>
        </a>

        <a href="#" class="opc-atv">
            <span class="d-p-flex">
                <img src="../icons/lembrancas.png">
                <p>Lembranças</p>
            </span>
        </a>

        <div class="d-none" id="opc-add-atividades">
            <a href="#" class="opc-atv">
                <span class="d-p-flex">
                    <img src="../icons/ajuda-comunidade.png">
                    <p>Ajuda da comunidade</p>
                </span>
            </a>

            <a href="#" class="opc-atv">
                <span class="d-p-flex">
                    <img src="../icons/covid.png">
                    <p>Covid 19: Central de inform.</p>
                </span>
            </a>

            <a href="#" class="opc-atv">
                <span class="d-p-flex">
                    <img src="../icons/favoritos.png">
                    <p>Favoritos</p>
                </span>
            </a>

            <a href="#" class="opc-atv">
                <span class="d-p-flex">
                    <img src="../icons/clima.png">
                    <p>Clima</p>
                </span>
            </a>

            <a href="#" class="opc-atv">
                <span class="d-p-flex">
                    <img src="../icons/eventos.png">
                    <p>Eventos</p>
                </span>
            </a>

        </div>

        <a href="#" class="opc-atv" onclick="verMaisAtividades()">
            <span class="d-p-flex">
                <button class="menu-opc-atv">
                    <img src="../icons/seta-baixo-aberta.png" class="ms-2" id="btn-atv">
                </button>
                <p id="p-btn">Ver mais</p>
            </span>
        </a>

        <hr>

        <div class="seus-atalhos">
            <span>
                <h3 class="me-5 ms-3">Seus atalhos</h3>
                <a href="#" class="ms-5">Editar</a>
            </span>

            <a href="https://github.com/SamuelMTeixeira" class="opc-atv">
                <span class="d-p-flex">
                    <img src="../icons/github.png">
                    <p>GitHub</p>
                </span>
            </a>


        </div>
    </aside>

    <script src="../js/scripts.js"></script>
</body>

</html>