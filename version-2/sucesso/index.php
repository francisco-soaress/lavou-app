<?php
ob_start();
session_start();
require './_app/Config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br" itemprop itemtype="https://www.schema.org/Article">

<head>
    <meta charset="UTF-8">
    <title><?= PG_TITLE; ?></title>
    <meta name="author" content="<?= PG_AUTHOR; ?>" />
    <link rel="canonical" href="<?= HOME; ?>" />
    <link rel="base" href="<?= HOME; ?>" />
    <meta name="description" content="<?= HEADER_TITLE_DESC; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow" />

    <!--[if lt IE 9]>
            <script src="_js/html5shiv.js"></script>
        <![endif]-->

    <meta itemprop="name" content="<?= PG_EMPRESA; ?>" />
    <meta itemprop="description" content="<?= HEADER_TITLE_DESC; ?>" />
    <meta itemprop="image" content="<?= INCLUDE_PATH; ?>" />
    <meta itemprop="url" content="<?= HOME; ?>" />

    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= PG_TITLE; ?>" />
    <meta property="og:description" content="<?= HEADER_TITLE_DESC; ?>" />
    <meta property="og:image" content="<?= INCLUDE_PATH; ?>" />
    <meta property="og:url" content="<?= HOME; ?>" />
    <meta property="og:site_name" content="<?= PG_EMPRESA; ?>" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:app_id" content="<?= PG_FB_APP; ?>" />
    <!--<meta property="article:author" content="<?= PG_FB_AUTHOR; ?>" />-->
    <meta property="article:publisher" content="https://www.facebook.com/<?= PG_FB_PAGE; ?>" />

    <link rel="stylesheet" href="<?= HOME; ?>_css/style.css" />
    <link rel="stylesheet" href="<?= HOME; ?>_css/boot.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="<?= HOME; ?>_images/favicon.png" />

    <script src="<?= HOME; ?>_js/jquery.js"></script>
    <script src="<?= HOME; ?>_js/script.js"></script>
</head>

<body>
    <?php require './_inc/fb-track-pixels-congratulations.php'; ?>
    <?php require './_inc/analyticstracking.php'; ?>

    <?php
    if (!empty($_SESSION['success'])):
    ?>

    <header>
        <div class="header_content content">
            <img class="img-logo" src="<?= HOME; ?>_images/logo.png" alt="<?= PG_EMPRESA; ?>" title="<?= PG_EMPRESA; ?>" />
            <h1 class="tt-uppercase">Cadastro realizado<br> <strong>com sucesso!</strong></h1>
            <p>Agradecemos o enteresse em nosso evento, logo nossa equipe entrará em contato.</p>
            <div class="clear"></div>
        </div>
        <div class="content">
            <div class="footer_redes_sociais">
                <p>- Curta nossas redes sociais - </p>
                <a class="footer-bt footer-bt-facebook efeito-levitar" target="_blank" href="https://www.facebook.com/jfv.capacitacao.empresarial"><img src="<?= HOME; ?>_images/icon-redes-sociais/footer-redes-sociais-facebook.png" alt="Clique aqui e curta nossa página no Facebook" title="Clique aqui e curta nossa página no Facebook" /></a>
                <a class="footer-bt footer-bt-instagram efeito-levitar" target="_blank" href="https://www.instagram.com/jfveventos/"><img src="<?= HOME; ?>_images/icon-redes-sociais/footer-redes-sociais-instagram.png" alt="Clique aqui e curta nosso Instagram" title="Clique aqui e curta nosso Instagram" /></a>
                <a class="footer-bt footer-bt-youtube efeito-levitar" target="_blank" href="https://www.youtube.com/channel/UCsUYCj4xUnAjJGeN0dAMwtA"><img src="<?= HOME; ?>_images/icon-redes-sociais/footer-redes-sociais-youtube.png" alt="Clique aqui e curta nosso canal no Youtube" title="Clique aqui e curta nosso canal no Youtube" /></a>
                <a class="footer-bt footer-bt-flickr efeito-levitar" target="_blank" href="https://www.flickr.com/photos/171400929@N03/albums"><img src="<?= HOME; ?>_images/icon-redes-sociais/footer-redes-sociais-flickr.png" alt="Nos siga no Flickr" title="Nos siga no Flickr" /></a>
            </div>
            <div class="clear"></div>
        </div>
    </header>
    <?php
    /* deleto a sessao */
    unset($_SESSION['success']);

    else:
        echo "
       <div class='box'>
            <div class='box_modal'>
                <i class='material-icons'>sentiment_very_dissatisfied</i>
                <h1>Formulário não foi enviado!</h1> 
                <p>Tente novamente ou entre em contato pelo telefone:<br><span>(31) 3283-8804 / 2511-9826</span></p>
                <a class='bt bt-green tt-uppercase' href='http://www.jfveventos.com.br/'>Voltar a JFV</a>
            </div>            
        </div>"
        ;
    endif;
    ?>
</body>

</html>
<?php
/* encerro o buffer */
ob_end_flush();
