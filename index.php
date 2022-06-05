<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Facebook - Entre ou cadastre-se</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Bootstrap Ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Custumização CSS -->
    <link rel="stylesheet" href="css/login.css">

    <!-- Ícone da página -->
    <link rel="icon" href="imgs/facebook-icon.png">

</head>

<body>

    <main class="container">
        <section class="row cmp-login">
            <div class="col-md-12 col-lg-6 cmp-login-logo">
                <img src="imgs/logo.svg" style="width: 290px;">
                <h3>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h3>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="box-login">
                    <form method="post" action="logar.php">
                        <?php
                        # SE O LOGIN ESTIVER ERRADO, EXIBE O FORMULARIO SUBLINHADO DE VERMELHO
                        if (isset($_GET['login'])) {
                            echo "<input class='form-control campo-dados text-erro' type='text' name='email' placeholder='Informe seu email' required>";
                            echo "<input class='form-control campo-dados text-erro' type='password' name='senha' placeholder='Informe sua senha' required>";
                            echo "<div class='alert alert-danger d-flex align-items-center' role='alert'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-triangle-fill' viewBox='0 0 16 16'><path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z' /></svg><div class='ms-2'>Login ou senha incorretos</div></div>";
                            echo "<input class='btn btn-primary btn-lg w-100' type='submit' value='Entrar'>";
                        } else {
                            echo "<input class='form-control campo-dados' type='text' name='email' placeholder='Informe seu email' required>";
                            echo "<input class='form-control campo-dados' type='password' name='senha' placeholder='Informe sua senha' required>";
                            echo "<input class='btn btn-primary btn-lg w-100' type='submit' value='Entrar'>";
                        }
                        ?>
                        <a href="#" class="nav-link text-primary">Esqueceu a senha?</a>
                    </form>                 

                    <hr>
                    <div class="container-fluid d-flex justify-content-center">
                        <input class="btn btn-success btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#modalCad" value="Criar nova conta">
                    </div>
                </div>

                <div id="criar-conta">
                    <a class="link-simples" href="#">Criar uma Página</a>
                    <p>para uma celebridade, uma marca ou uma empresa.</p>
                </div>
            </div>
        </section>
    </main>

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

                        <!-- NOME E SOBRENOME-->
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <input class="form-control campo-dados" type="text" name="nome" placeholder="Nome" required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control campo-dados" type="text" name="sobrenome" placeholder="Sobrenome" required>
                            </div>
                        </div>

                        <!-- EMAIL E SENHA-->
                        <input class="campo-dados form-control mb-2" type="email" name="email" placeholder="Informe seu email" required>
                        <input class="campo-dados form-control mb-2" type="password" name="senha" placeholder="Nova senha" required>

                        <!-- DATA DE ANIVERSARIO -->
                        <label class="form-label">Data de nascimento</label>
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <select class="form-select" id="cad-niverDia" name="dia" required>
                                    <option selected disabled value="">Dia</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" id="cad-niverMes" name="mes" required>
                                    <option selected disabled value="">Mes</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" id="cad-niverAno" name="ano" required>
                                    <option selected disabled value="">Ano</option>
                                </select>
                            </div>
                        </div>

                        <!-- GENERO -->
                        <label class="form-label">Gênero</label>
                        <div class="row d-flex justify-content-around">
                            <div class="col-md-3 radioButton">
                                <input class="campo-dados form-check-input" id="m" type="radio" name="sexo" value="M" checked>
                                <label class="form-check-label" for="m">Masculino</label>
                            </div>
                            <div class="col-md-3 radioButton">
                                <input class="campo-dados form-check-input" id="f" type="radio" name="sexo" value="F">
                                <label class="form-check-label" for="f">Feminino</label>
                            </div>
                            <div class="col-md-3 radioButton">
                                <input class="campo-dados form-check-input" id="o" type="radio" name="sexo" value="O">
                                <label class="form-check-label" for="o">Personalizado</label>
                            </div>
                        </div>

                        <p class="txt-desc mt-3">Ao clicar em Cadastre-se, você concorda com nossos Termos, Política de Dados e Política de Cookies. Você poderá receber notificações por SMS e cancelar isso quando quiser.</p>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success btn-lg" value="Cadastre-se">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>