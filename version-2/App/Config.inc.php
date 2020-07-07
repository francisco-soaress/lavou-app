<?php

/* DEFININDO CONSTANTES DE CAMINHO DO SERVIDOR */
if ($_SERVER['HTTP_HOST'] == "localhost"):
    define('BASE', 'https://localhost/sites/web-fr/lavou/');
else:
    define('BASE', 'https://www.webfr.com.br/lavou/');
endif;

/* ======================================================= */
/* ========== DEFINES:: IMG, CSS, JS, LIB e ETC ========== */
/* ======================================================= */
define("BASE_FOLDER_IMG", BASE . "Assets/img"); /* não alterar */
define("BASE_FOLDER_CSS", BASE . "Assets/css"); /* não alterar */
define("BASE_FOLDER_JS", BASE . "Assets/js"); /* não alterar */
define("BASE_FOLDER_LIB", BASE . "Assets/lib"); /* não alterar */
define("THEME",  "Lavou"); /* não alterar */
define("THEME_PATH", "Themes/" . THEME); /* não alterar */
define("THEME_PATH_IMG", BASE . "Themes/Lavou/Assets/image"); /* não alterar */
define("THEME_PATH_CSS", BASE . "Themes/Lavou/Assets/css"); /* não alterar */
define("THEME_PATH_JS", BASE . "Themes/Lavou/Assets/js"); /* não alterar */


$base = BASE; /* não alterar */
$theme_path = THEME_PATH; /* não alterar */
$theme_path_css = THEME_PATH_CSS; /* não alterar */
$theme_path_img = THEME_PATH_IMG; /* não alterar */
$path_img = BASE_FOLDER_IMG; /* não alterar */
$path_css = BASE_FOLDER_CSS; /* não alterar */
$path_js = BASE_FOLDER_JS; /* não alterar */
$path_lib = BASE_FOLDER_LIB; /* não alterar */

/* ============================================ */
/* ========== DEFINES:: URL Dinâmica ========== */
/* ============================================ */
$configUrl = explode("/", strip_tags(filter_input(INPUT_GET, "url", FILTER_DEFAULT)));
$configUrl[0] = (!empty($configUrl[0]) ? $configUrl[0] : "index");


