<main>
    <section class="container login_registration">
        <div class="row">
            <div class="col-lg-6 form_login p30-left-right">
                <h2>Login</h2>
                <p>Entre com sua conta <strong>Lavou</strong></p>

                <form name="form-login" class="form-login" action="" method="post">
                    <div class="form-group">
                        <div class="input-group p30-bottom">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon-mail icon-notext icon_form"></span>
                                <!-- <span class="input-group-text"><span class="material-icons icon_form">email</span></span> -->
                            </div>
                            <input class="form-control form-control-lg login_email form_border_left" type="email" id="login_email" required="required" placeholder="Informe seu E-mail: *">
                        </div>
                        <div class="input-group p30-bottom">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon-lock icon-notext icon_form"></span>
                                <!-- <span class="input-group-text"><span class="material-icons icon_form">lock</span></span> -->
                            </div>
                            <input class="form-control form-control-lg login_senha form_border_left" type="password" id="login_senha" required="required" placeholder="Informe sua Senha: *">
                        </div>
                        <button class="bt-form bt-bg-blue-border-blue">Entrar</button>

                    </div>
                </form>
            </div>
            <div class="col-lg-6 form_register p30-left-right">
                <h2>Ainda não é cadastrado?</h2>
                <p>Informe seus dados abaixo:</p>
                <form name="form-login" class="form-login" action="https://www.webfr.com.br/lavou/cadastro" method="post">
                    <div class="form-group">
                        <div class="input-group p30-bottom">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon-user icon-notext icon_form"></span>
                                <!-- <span class="input-group-text"><span class="material-icons icon_form">account_circle</span></span> -->
                            </div>
                            <input class="form-control form-control-lg cadastro_usuario form_border_left" type="text" id="cadastro_usuario" required="required" placeholder="Nome: *">
                        </div>
                        <div class="input-group p30-bottom">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon-shield icon-notext icon_form"></span>
                                <!-- <span class="input-group-text"><span class="material-icons icon_form">verified_user</span></span> -->
                            </div>
                            <input class="form-control form-control-lg cadastro_cpf form_border_left" type="text" id="cadastro_" required="required" placeholder="CPF: *">
                        </div>
                        <div class="input-group p30-bottom">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon-mail icon-notext icon_form"></span>
                            </div>
                            <input class="form-control form-control-lg cadastro_email form_border_left" type="email" id="cadastro_email" required="required" placeholder="E-mail: *">
                        </div>
                        <button class="bt-form bt-bg-gray-border-gray">Cadastrar</button>

                    </div>
                </form>
            </div>
        </div>
    </section>
</main>