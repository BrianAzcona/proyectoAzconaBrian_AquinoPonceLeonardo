<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniterCart\Cart;
use Cart\src\Config\Services;
use App\Models\JuegoModel;
use App\Models\DetalleVentaModel;
use App\Models\VentaModel;


class Carrito_controller extends BaseController
{
    protected $cart;

    public function __construct()
    {
    $this->cart = new Cart();

    }


    public function ver_carrito()
    {
        
    $cart = \Config\Services::cart();
    $items = $this->cart->contents();

    // Ahora le agregamos también el título
    $data = [
        'items'  => $items,
        'titulo' => 'Mi Carrito de Compras'
    ];

    echo view('plantillas/header_view', $data);
    echo view('plantillas/nav_view');
    echo view('contenido/carrito_view', $data);
    echo view('plantillas/footer_view');
    }


    public function agregar_carrito()
    {
        $cart = \Config\Services::cart();
        $producto = [
            'id'      => $this->request->getPost('id'),
            'name'    => $this->request->getPost('nombre'),
            'price'   => $this->request->getPost('precio'),
            'qty'     => 1
        ];

        $cart->insert($producto);

        return redirect()->to('ver_carrito');
    }

    public function guardar_venta()
{
    $cart = \Config\Services::cart();
    $venta = new VentaModel();
    $detalle = new DetalleVentaModel();
    $juegos = new JuegoModel;

    $cart1 = $cart->contents();

    foreach ($cart1 as $item) {
        $juego = $juegos->where('juego_id', $item['id'])->first();
        if ($juego['juego_stock'] < $item['qty']) {
            // Mensaje de producto sin stock
            session()->setFlashdata('error', 'Uno o más productos no tienen stock suficiente.');
            return redirect()->route('ver_carrito');
        }
    }

    $data = array(
        'cliente_id' => session('cliente_id'),
        'ventas_fecha'  => date('Y-m-d'),
    );
    $venta_id = $venta->insert($data);

    $cart1 = $cart->contents();
    foreach ($cart1 as $item) {
        $detalle_venta = array(
            'ventas_id'         => $venta_id,
            'juego_id'      => $item['id'],
            'detalle_cantidad' => $item['qty'],
            'detalle_precio'   => $item['price']
        );

        $juego = $juegos->where('juego_id', $item['id'])->first();
        $data = [
            'juego_stock' => $juego['juego_stock'] - $item['qty'],
        ];

        // Actualiza el stock del libro
        $juegos->update($item['id'], $data);

        // Inserta el detalle de venta
        $detalle->insert($detalle_venta);
    }

    // mensaje de agradecimiento por la compra
    session()->setFlashdata('compra_exitosa', '¡Gracias por tu compra! Tu pedido fue procesado con éxito.');

    $cart->destroy();
    return redirect()->route('productos');
}


    public function borrar($id = null)
    {
        if ($id === 'all' || $id === 'vaciar') {
            $this->cart->destroy(); // Vaciar todo
        } else {
            $this->cart->remove($id); // Eliminar item específico
        }

        return redirect()->to('ver_carrito');
    }
}