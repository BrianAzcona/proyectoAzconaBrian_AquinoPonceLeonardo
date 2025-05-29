<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('nosotros', 'Home::quienesSomos');

$routes->get('contacto', 'Home::contactos');

$routes->get('comercializacion', 'Home::comercializacion');

$routes->get('productos', 'Home::producto');

$routes->get('Ayuda', 'Home::terminosYcondiciones');

$routes->get('inicio', 'Home::inicio');

$routes->match(['get', 'post'], 'crearCuenta', 'ClienteController::agregarCliente');

$routes->match(['get', 'post'], 'consulta', 'MensajeController::agregarConsulta');
$routes->get('upload', 'Upload::index');          // Add this line.
$routes->post('upload/upload', 'Upload::upload'); // Add this line.

$routes->get('cliente/cerrarSesion', 'ClienteController::cerrarSesion');
