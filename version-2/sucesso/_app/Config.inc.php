<?php

/* DEFININDO CONSTANTES DE CAMINHO DO SERVIDOR */
if ($_SERVER['HTTP_HOST'] == "localhost"):
    define('HOME', 'https://localhost/_sites/web-fr/_jfv/site/congratulations/');
else:
    define('HOME', 'https://www.jfveventos.com.br/_send/congratulations/');
endif;

define('THEME', 'html');
define('INCLUDE_PATH', HOME . '_images/sitekit/index.png');
define('REQUIRE_PATH', 'themes/' . THEME);

/* ----- DEFINE DE ESTRUTURAS ----- */

/* ----- EMPRESA JFV - DADOS FUNCIONARIOS ----- */
define('JFV_CONTATO_HOME_TELEFONE', '(31) 3283-8804 / 2511-9826');
define('JFV_CONTATO_HOME_EMAIL', 'contato@jfveventos.com.br');

/* ----- EMPRESA CRIADORA DO SISTEMA/SITE ----- */
define('WEB_FR', 'Web-Fr');
define('WEB_FR_DESCRICAO', 'Web-Fr | Sua Solução Web!');
define('WEB_FR_SITE', 'https://www.webfr.com.br/index.php?webfr=jfv-showemvendas');


/* ----- DESCRICAO PARA REDES SOCIAIS ----- */
define('PG_EMPRESA', 'JFV | Capacitação Empresarial');
define('PG_TITLE', 'JFV | Capacitação Empresarial');
define('PG_AUTHOR', 'JFV | Capacitação Empresarial');

define('PG_FB_APP', '1992689740969712');
define('PG_FB_AUTHOR', 'JFV | Capacitação Empresarial');
define('PG_FB_PAGE', 'jfv.capacitacao.empresarial');
define('PG_DOMAIN', 'www.jfveventos.com.br');

/* ----- HEADER SITE ----- */
define('HEADER_TITLE_DESC', 'A JFV Capacitação Empresarial atua em Belo Horizonte desde 2004. Seus eventos têm promovido crescimento acima da média nas empresas participantes.');








