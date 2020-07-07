<section class="main_contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Entre em Contato</h2>
                <div class="hr-title"></div>
            </div>
        </div>

        <div class="row grid-container">
            <div class="col-lg-6">
                <?php for ($f = 1; $f < 7; $f++) { ?>
                    <div class="main_contact_faq">
                        <h4><span>+</span> <?= $f; ?>ª pergunta do Faq</h4>
                        <div class="main_contact_faq_desc">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis nulla ipsum omnis quos mollitia doloribus natus error sapiente eum! Dolorum omnis eveniet illum tempora totam expedita deserunt optio id magnam.
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="col-lg-6">
                <div class="main_contact_title"><strong>Telefone:</strong><br> (11) 5555-4444</div>
                <div class="main_contact_title"><strong>Email:</strong><br> <a href="mailto:contato@lavou.app">contato@lavou.app</a></div>

                <div class="grid-container-flex">
                    <a class="bt-icons-line bt-icons-line-facebook icon-facebook icon-notext" target="_blank" href="https://www.facebook.com/lavouapp/"></a>
                    <a class="bt-icons-line bt-icons-line-instagram icon-instagram icon-notext" target="_blank" href="https://www.instagram.com/lavouapp/"></a>
                    <a class="bt-icons-line bt-icons-line-linkedin icon-linkedin icon-notext" target="_blank" href="https://www.linkedin.com/company/lavou-app/"></a>
                </div>
            </div>
        </div>
    </div>
</section>