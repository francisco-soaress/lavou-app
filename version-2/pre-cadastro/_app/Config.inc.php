<?php

/* DEFININDO CONSTANTES DE CAMINHO DO SERVIDOR */
if ($_SERVER['HTTP_HOST'] == "localhost"):
    define('HOME_HOTSITE', 'https://localhost/sites/web-fr/lavou/pre-cadastro/');
else:
    // define('HOME_HOTSITE', 'https://www.jacobpetry.com/maestria-mental/');
   define('HOME_HOTSITE', 'https://lavou.app/pre-cadastro/');
endif;

define('THEME_HOTSITE', 'html');
define('INCLUDE_PATH_HOTSITE', HOME_HOTSITE . '_images/sitekit/sitekit.png');
define('REQUIRE_PATH_HOTSITE', 'themes/' . HOME_HOTSITE);

/* ======================================================================================= */
/* ========== DEFINES:: JS, CSS e IMG ========== */
/* ======================================================================================= */

define('THEMES_FOLDER_IMG_HOTSITE', HOME_HOTSITE . '_images/'); /* não alterar */
define('THEMES_FOLDER_CSS_HOTSITE', HOME_HOTSITE . '_css/'); /* não alterar */
define('THEMES_FOLDER_JS_HOTSITE', HOME_HOTSITE . '_js/'); /* não alterar */


/* =========================================================== */
/* ========== DEFINES:: SITE = Descrição da Empresa ========== */
/* =========================================================== */

define('SITE_TITLE', 'Lavou - A revolução da lavagem'); /* Também é utilizado nas Redes Sociais */
define('SITE_AUTHOR', 'Lavou - A revolução da lavagem'); /* Também é utilizado nas Redes Sociais */
define('SITE_DESC', 'A revolução da lavagem na palma da sua mão.'); /* Também é utilizado nas Redes Sociais */

/* ===== FACEBOOK */
define('SOCIAL_IMAGE', INCLUDE_PATH_HOTSITE);
//define('FB_NUM_APP', '144039969009903');
define('FB_PAGE', 'jacobjpetry');
define('FB_PAGE_LINK', 'https://www.facebook.com/lavouapp');
define('FB_PAGE_AUTHOR', 'https://www.facebook.com/lavouapp');
define('FB_PAGE_DESC', 'Curta nossa Página');


/* ========================================================================================================== */
/* ========== DEFINES:: WEBFR = Dados da Empresa WEB-FR - Empresa responsável pela criação do site ========== */
/* ========================================================================================================== */

DEFINE('WEBFR', 'http://www.webfr.com.br/index.php?webfr=jfv-pre-venda-20-congresso');
DEFINE('WEBFR_DESC', 'Web-Fr | Sua Solução Web!');








