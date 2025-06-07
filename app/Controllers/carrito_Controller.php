<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniterCart\Cart;


class Carrito_controller extends BaseController
{
    protected $cart;

    public function __construct()
    {
    $this->cart = new Cart();

    }


    public function ver_carrito()
    {
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
        $producto = [
            'id'      => $this->request->getPost('id'),
            'qty'     => $this->request->getPost('cantidad'),
            'price'   => $this->request->getPost('precio'),
            'name'    => $this->request->getPost('nombre'),
        ];

        $this->cart->insert($producto);
        return redirect()->to('ver_carrito');
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
