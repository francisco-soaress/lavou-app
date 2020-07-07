<main>
    <!-- begin-step-one -->
    <div>
        <section class="container">
            <form name="form_continue_registration" class="form-login" action="" method="post">
                <div class="row p60-top-bottom align-items-center">
                    <div class="col-lg-5 form_continue_registration p30-left-right">
                        <div class="steps">Passo 1</div>
                        <h2>Dados Pessoais</h2>
                        <p>Identificação no sistema e cadastramento da conta <strong>Lavou Online</strong></p>
                    </div>
                    <div class="col-lg-7 p30-left-right">

                        <div class="form-group">
                            <!-- email -->
                            <div class="input-group p15-bottom">
                                <input class="form-control form-control-lg continue_registration_email" type="email" id="continue_registration_email" required="required" placeholder="Informe seu E-mail: *">
                            </div>
                            <!-- name -->
                            <div class="input-group p15-bottom">
                                <input class="form-control form-control-lg continue_registration_firstname_lastname" type="text" id="continue_registration_firstname_lastname" required="required" placeholder="Informe seu Nome e Sobrenome: *">
                            </div>

                            <div class="row">
                                <!-- cpf -->
                                <div class="col-lg-6">
                                    <div class="input-group p15-bottom">
                                        <input class="form-control form-control-lg continue_registration_id" type="text" id="continue_registration_id" required="required" placeholder="Informe seu CPF: *">
                                    </div>
                                </div>
                                <!-- date_birth -->
                                <div class="col-lg-6">
                                    <div class="input-group p15-bottom">
                                        <input class="form-control form-control-lg continue_registration_date_birth" type="text" id="continue_registration_date_birth" required="required" placeholder="Informe sua Data de Nascimento: *">
                                    </div>
                                </div>
                            </div>
                            <!-- genre -->
                            <div class="input-check p15-bottom input_genre">
                                <span class="txt_sexo p30-right">Sexo:</span>
                                <input class="form-check-input continue_registration_genre" name="genre" type="radio" id="continue_registration_genre_m" required="required">
                                <label class="form-check-label p30-right" for="continue_registration_genre_m">Masculino</label>
                                <input class="form-check-input continue_registration_genre" name="genre" type="radio" id="continue_registration_genre_f" required="required">
                                <label class="form-check-label" for="continue_registration_genr_f">Feminino</label>
                            </div>

                            <div class="row">
                                <!-- registration_choice -->
                                <div class="col-lg-6">
                                    <div class="input-group p15-bottom">
                                        <select class="form-control form-control-lg continue_registration_choice" id="continue_registration_choice" required="required">
                                            <option>Escolha 1</option>
                                            <option>Escolha 2</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- registration_phone_number -->
                                <div class="col-lg-6">
                                    <div class="input-group p15-bottom">
                                        <input class="form-control form-control-lg continue_registration_phone_number" type="text" id="continue_registration_phone_number" required="required" placeholder="(DDD) Telefone: *">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- registration_password -->
                                <div class="col-lg-6">
                                    <div class="input-group p15-bottom">
                                        <input class="form-control form-control-lg continue_registration_password" type="text" id="continue_registration_password" required="required" placeholder="Senha: *">
                                    </div>
                                </div>
                                <!-- registration_password_confirm -->
                                <div class="col-lg-6">
                                    <div class="input-group p15-bottom">
                                        <input class="form-control form-control-lg continue_registration_password_confirm" type="text" id="continue_registration_password_confirm" required="required" placeholder="Confirme sua Senha: *">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <!-- end-step-one -->

    <!-- begin-step-two -->
    <div class="bg-lightgray">
        <section class="container">
            <div class="row p60-top-bottom align-items-center step_two">
                <div class="col-lg-7 p30-left-right step_two_form">
                    <div class="form-group">

                        <div class="row">
                            <!-- registration_cep -->
                            <div class="col-lg-5">
                                <div class="input-group p15-bottom">
                                    <input class="form-control form-control-lg continue_registration_cep" type="text" id="continue_registration_cep" required="required" placeholder="Informe seu CEP: *">
                                </div>
                            </div>
                            <!-- registration_uf -->
                            <div class="col-lg-2">
                                <div class="input-group p15-bottom">
                                    <select class="form-control form-control-lg continue_registration_uf" id="continue_registration_uf" required="required">
                                        <option>UF</option>
                                        <option>Escolha 2</option>
                                    </select>
                                </div>
                            </div>
                            <!-- registration_city -->
                            <div class="col-lg-5">
                                <div class="input-group p15-bottom">
                                    <input class="form-control form-control-lg continue_registration_city" type="text" id="continue_registration_city" required="required" placeholder="Cidade: *">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- registration_address -->
                            <div class="col-lg-8">
                                <div class="input-group p15-bottom">
                                    <input class="form-control form-control-lg continue_registration_address" type="text" id="continue_registration_address" required="required" placeholder="Endereço: *">
                                </div>
                            </div>
                            <!-- registration_address_number -->
                            <div class="col-lg-4">
                                <div class="input-group p15-bottom">
                                    <input class="form-control form-control-lg continue_registration_address_number" type="text" id="continue_registration_address_number" required="required" placeholder="Cidade: *">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- registration_address_complement -->
                            <div class="col-lg-4">
                                <div class="input-group p15-bottom">
                                    <input class="form-control form-control-lg continue_registration_address_complement" type="text" id="continue_registration_address_complement" required="required" placeholder="Complemento: *">
                                </div>
                            </div>
                            <!-- registration_address_district -->
                            <div class="col-lg-4">
                                <div class="input-group p15-bottom">
                                    <input class="form-control form-control-lg continue_registration_address_district" type="text" id="continue_registration_address_district" required="required" placeholder="Bairro: *">
                                </div>
                            </div>
                            <!-- registration_address_nickname -->
                            <div class="col-lg-4">
                                <div class="input-group p15-bottom">
                                    <input class="form-control form-control-lg continue_registration_address_nickname" type="text" id="continue_registration_address_nickname" required="required" placeholder="Apelido: *">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 form_continue_registration p30-left-right step_two_text">
                    <div class="steps">Passo 2</div>
                    <h2>Endereço</h2>
                    <p>Identificação no sistema e cadastramento da conta <strong>Lavou Online</strong></p>
                </div>
        </section>
    </div>
    <!-- begin-step-two -->

    <!-- begin-step-three -->
    <div>
        <section class="container">
            <div class="row p60-top-bottom align-items-center">
                <div class="col-lg-12 form_continue_registration p30-left-right">
                    <div class="steps">Passo 3</div>
                    <h2>Dados Pessoais</h2>
                    <p>Identificação no sistema e cadastramento da conta <strong>Lavou Online</strong></p>
                    <hr>
                </div>
                <div class="col-lg-12 form_continue_registration p30-left-right">
                    <div class="txt_term">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>

                    <div class="txt_term">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</div>

                    <!-- registration_check_terms -->
                    <div class="form-check input_terms">
                        <input class="form-check-input continue_registration_check_terms" type="checkbox" id="continue_registration_check_terms">
                        <label class="form-check-label" for="continue_registration_check_terms">Li e concordo com os termos</label>
                    </div>
                </div>

            </div>
            <div class="row p60-top-bottom align-items-center">
                <div class="col-lg-12 form_continue_registration p30-left-right">
                    <div class="form-group">
                        <button class="bt-form bt-bg-blue-border-blue btn_registration_complete">Cadastrar</button>
                    </div>
                </div>
            </div>

            </form>
        </section>
    </div>
    <!-- end-step-three -->

</main>