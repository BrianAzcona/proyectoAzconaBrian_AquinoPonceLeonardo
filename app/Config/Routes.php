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

$routes->get('productos/categoria/(:any)', 'Home::productosAside/$1');


$routes->get('Ayuda', 'Home::terminosYcondiciones');

$routes->get('inicio', 'Home::inicio');

$routes->match(['get', 'post'], 'crearCuenta', 'ClienteController::agregarCliente');

$routes->match(['get', 'post'], 'consulta', 'MensajeController::agregarConsulta');
//modificar 
$routes->get('upload', 'Upload::index');          // Add this line.
$routes->post('upload/upload', 'Upload::upload'); // Add this line.

$routes->get('cliente/cerrarSesion', 'ClienteController::cerrarSesion');

$routes->match(['get', 'post'], 'cliente/iniciarSesion', 'ClienteController::iniciarSesion');

$routes->get('cliente/inicioCliente', 'ClienteController::inicioCliente');

$routes->get('admin/inicioAdmin', 'ClienteController::inicioAdmin');


$routes->get('listar_juegos', 'JuegoController::listar_juegos');


$routes->get('ver_carrito', 'carrito_controller::ver_carrito');

$routes->post('agregar_carrito', 'carrito_controller::agregar_carrito');

$routes->get('eliminar_item/(:any)', 'carrito_controller::borrar/$1');

$routes->get('vaciar_carrito/(:any)', 'carrito_controller::borrar/$1');

$routes->get('guardar_venta', 'carrito_controller::guardar_venta', ['filter' => 'filtroCliente']);


//Funciones para el administrador
$routes->get('registrarProducto', 'juegoController::registroProducto', ['filter' => 'filtroAdmin']);

$routes->post('registrarJuego', 'juegoController::agregarJuego', ['filter' => 'filtroAdmin']);

$routes->get('listarJuegos', 'juegoController::listaProductos', ['filter' => 'filtroAdmin']);

$routes->get('consultasAdministrador', 'mensajeController::consultasAdmin', ['filter' => 'filtroAdmin']);

$routes->get('gestionarProductos', 'juegoController::gestionarProducto', ['filter' => 'filtroAdmin']);

$routes->get('gestionarProductos', 'juegoController::actualizarProducto', ['filter' => 'filtroAdmin']);

$routes->get('productos/editar/(:num)', 'JuegoController::editarJuego/$1', ['filter' => 'filtroAdmin']);

$routes->post('actualizarJuego', 'JuegoController::actualizarJuego', ['filter' => 'filtroAdmin']);

$routes->get('productos/eliminar/(:num)', 'JuegoController::eliminarJuego/$1', ['filter' => 'filtroAdmin']);

$routes->get('eliminarJuego/(:num)', 'JuegoController::eliminar_juego/$1', ['filter' => 'filtroAdmin']);

$routes->get('verVentas', 'ventaController::ventasAdmin', ['filter' => 'filtroAdmin']);