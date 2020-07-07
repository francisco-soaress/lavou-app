<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lavou - Login ou cadastro</title>


    <!-- Favicons -->
    <link href="../img/faviconlavou.jpg" rel="icon">
    <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- styles lavou -->
    <link href="../css/style-components.css" rel="stylesheet">
    <link href="../css/style-login.css" rel="stylesheet">
    <link href="../css/fontawesome/css/all.css" rel="stylesheet">


    <!-- Libraries CSS Files -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet"> -->



</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-darkblue">
            <div class="container">
                <a href="##" class="navbar-brand">
                    <img class="img-100" src="../img/lavou-a-revolucao-da-lavagem.png" alt="Lavou - A revolução da lavagem" title="Lavou - A revolução da lavagem">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-menu-login">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse nav_menu" id="nav-menu-login">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="##">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="##">Empresa</a></li>
                        <li class="nav-item"><a class="nav-link" href="##">Contato</a></li>
                    </ul>
                    <div class="menu_divisor"></div>
                    <span class="icon_menu_login"><i class="fas fa-user-circle"></i></span>
                    <!-- <span class="material-icons icon_menu_login">account_circle</span> -->
                    <p>Olá, faça seu <a href="##">login</a><br> <span>ou <a href="">cadastre-se</a></span></p>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="container">
            <div class="row p60-top-bottom">
                <div class="col-lg-6 form_login p30-left-right">
                    <h2>Login</h2>
                    <p>Entre com sua conta <strong>Lavou</strong></p>

                    <form name="form-login" class="form-login" action="" method="post">
                        <div class="form-group">
                            <div class="input-group p30-bottom">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope icon_form"></i></span>
                                    <!-- <span class="input-group-text"><span class="material-icons icon_form">email</span></span> -->
                                </div>
                                <input class="form-control form-control-lg" type="email" id="login_email" class="login_email" required="required" placeholder="Informe seu E-mail: *">
                            </div>
                            <div class="input-group p30-bottom">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock icon_form"></i></span>
                                    <!-- <span class="input-group-text"><span class="material-icons icon_form">lock</span></span> -->
                                </div>
                                <input class="form-control form-control-lg" type="password" id="login_senha" class="login_senha" required="required" placeholder="Informe sua Senha: *">
                            </div>
                            <button class="bt-form bt-bg-blue-border-blue">Entrar</button>

                        </div>
                    </form>
                </div>
                <div class="col-lg-6 form_register p30-left-right">
                    <h2>Ainda não é cadastrado?</h2>
                    <p>Informe seus dados abaixo:</p>
                    <form name="form-login" class="form-login" action="" method="post">
                        <div class="form-group">
                            <div class="input-group p30-bottom">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-circle icon_form"></i></span>
                                    <!-- <span class="input-group-text"><span class="material-icons icon_form">account_circle</span></span> -->
                                </div>
                                <input class="form-control form-control-lg" type="text" id="cadastro_usuario" class="cadastro_usuario" required="required" placeholder="Nome: *">
                            </div>
                            <div class="input-group p30-bottom">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-shield-alt icon_form"></i></span>
                                    <!-- <span class="input-group-text"><span class="material-icons icon_form">verified_user</span></span> -->
                                </div>
                                <input class="form-control form-control-lg" type="text" id="cadastro_" class="cadastro_cpf" required="required" placeholder="CPF: *">
                            </div>
                            <div class="input-group p30-bottom">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope icon_form"></i></span>
                                </div>
                                <input class="form-control form-control-lg" type="email" id="cadastro_email" class="cadastro_email" required="required" placeholder="E-mail: *">
                            </div>
                            <button class="bt-form bt-bg-gray-border-gray">Entrar</button>

                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-darkblue p60-top-bottom">
        <div class="container">
            <div class="row footer_desc">
                <div class="col-lg-5"><img class="img-logo-footer-300" src="../img/lavou-a-revolucao-da-lavagem.png" alt="Lavou - A revolução da lavagem" title="Lavou - A revolução da lavagem"></div>
                <div class="col-lg-4 footer_p_top">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer_menu_titulo">Empresa</div>
                            <ul>
                                <li><a href="##">Sobre nós</a></li>
                                <li><a href="##">Como funciona</a></li>
                                <li><a href="##">Newsroom</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 footer_p_top">
                            <div class="footer_menu_titulo">Contato</div>
                            <ul>
                                <li><a href="##">FAQ</a></li>
                                <li><a href="##">Telefone</a></li>
                                <li><a href="##">E-mail</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer_p_top footer_p60_l border-l">
                    <div class="footer_menu_icon">Nos acompanhe em nossas redes sociais:</div>

                    <div class="content_footer">
                        <a target="_blank" href="https://www.facebook.com/lavouapp/"><i class="fab fa-facebook-square bt-icons-line bt-icons-line-facebook"></i></a>
                        <a target="_blank" href="https://www.instagram.com/lavouapp/"><i class="fab fa-instagram-square bt-icons-line bt-icons-line-instagram"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/company/lavou-app/"><i class="fab fa-linkedin bt-icons-line bt-icons-line-linkedin"></i></a>
                    </div>
                </div>
            </div>
    </footer>



    <!-- JavaScript Libraries -->
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/jquery/jquery-migrate.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../css/fontawesome/js/all.js"></script>
</body>

</html>