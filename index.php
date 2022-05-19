<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Facebook - Entre ou cadastre-se</title>

    <!-- Custumização CSS -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Ícone da página -->
    <link rel="icon" href="imgs/facebook-icon.png">

</head>

<body class="bg">

    <section class="container centralizar">
        <div class="row cmp-login">
            <div class="col-sm-12 col-md-6 cmp-login-logo">
                <img src="imgs/logo.svg" style="width: 290px;">
                <h3>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h3>
            </div>

            <div class="col-sm-12 col-md-6">
                <div class="box-login">
                    <form method="post" action="logar.php">
                        <input class="campo-dados" type="text" name="login" placeholder="Informe seu nome de usuário" required>
                        <input class="campo-dados" type="password" name="senha" placeholder="Informe sua senha" required>
                        <input class="btn btn-primary btn-logar" type="submit" value="Entrar">
                    </form>

                    <a href="#">Esqueceu a senha?</a>
                    <span class="centralizar">
                        <input class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#modalCad" value="Criar nova conta">
                    </span>
                </div>

                <span id="criar-conta-basic">
                    <a class="link-simples" href="#">Criar uma Página</a>
                    <p>para uma celebridade, uma marca ou uma empresa.</p>
                </span>
            </div>
        </div>
    </section>

    <script src="./css/bootstrap.bundle.min.js"></script>


    <!-- Modal Do cadastro -->
    <div class="modal fade" id="modalCad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form method="post" action="cadastrar.php">
                    <div class="modal-header modCad">
                        <div>
                            <h2 class="modal-title" id="exampleModalLabel">Cadastre-se</h2>
                            <p>É rápido e fácil.</p>
                        </div>

                        <button type="button" class="btn-close mt-1" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input class="campo-dados" type="text" name="login" placeholder="Informe seu nome do usuário" id="cmp-login" required>
                        <input class="campo-dados" type="email" name="email" placeholder="Informe seu email" id="cmp-login" required>
                        <input class="campo-dados" type="password" name="senha" placeholder="Informe sua senha" id="cmp-senha" required>
                        <p class="txt-desc">Ao clicar em Cadastre-se, você concorda com nossos Termos, Política de Dados e Política de Cookies. Você poderá receber notificações por SMS e cancelar isso quando quiser.</p>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>