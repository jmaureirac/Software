<?php

/* Carga framework y librerias */
require_once '../vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 'stdout');

$fat = \Base::instance();

$fat->set('DEBUG', 1);

$fat->config('../config/dev.ini');

/* Enrutado generico */
$fat->route('GET|POST /@modulo/@funcionalidad', '\controller\@modulo\@funcionalidad->index');
$fat->route('GET|POST /@modulo/@funcionalidad/@metodo', '\controller\@modulo\@funcionalidad->@metodo');
$fat->route('GET|POST /@modulo/@funcionalidad/@metodo/*', '\controller\@modulo\@funcionalidad->@metodo');

/* Enrutado con AJAX */
$fat->route('POST|GET /ajax/@modulo/@funcionalidad/@metodo [ajax]', '\controller\api\@modulo\@funcionalidad->ajax_@metodo');
$fat->route('POST|GET /ajax/@modulo/@funcionalidad/@metodo/@var [ajax]', '\controller\api\@modulo\@funcionalidad->ajax_@metodo');

/* Enrutado básico o de portada */
$fat->route('GET /', '\controller\usuario\Portada->index');
$fat->route('POST /login', '\controller\usuario\Portada->login');
$fat->route('GET /salir', '\controller\usuario\Portada->salir');
$fat->route('GET /error', '\controller\usuario\Portada->error');


$fat->route('GET /permisos', '\controller\usuario\perfil->permisos');
$fat->route('GET /foto.jpg', '\controller\usuario\Portada->foto');

/* Si genera error */
//$fat->set('ONERROR', function($fat) {
//    while (ob_get_level()) {
//        ob_end_clean();
//    }
//    $fat->set('SESSION.error', $fat->get('ERROR.code'));
//    if ($fat->exists('SESSION.logged')) {
//        $fat->reroute('/usuario/perfil/error');
//    } else {
//        $fat->reroute('/usuario/portada/error');
//    }
//});

/* Locales */
setlocale(LC_ALL, 'en_US.utf8');
$fat->set('LANGUAGE', 'en_US.utf8');

/* Añadimos las etiquetas especiales */
\Template::instance()->extend('mensaje', 'mensaje::render');

//var_dump($fat->get('SESSION'));
/* A la vida */
$fat->run();
