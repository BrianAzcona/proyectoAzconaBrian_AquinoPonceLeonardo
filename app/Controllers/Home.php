<?php

namespace App\Controllers;

use App\Models\JuegoModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data['titulo'] = "Inicio";
        return view('plantillas/header_view.php', $data).view("plantillas/nav_view.php").view("Views/contenido/home_view.php").view("plantillas/footer_view.php");
    }

    public function quienesSomos(): string {
        $data['titulo'] = "Quienes Somos";
        return view('plantillas/header_view.php', $data).view("plantillas/nav_view.php").view('contenido/QuienesSomos.php').view("plantillas/footer_view.php");
    }

    public function contactos(): string {
        $data['titulo'] = "Conectado con nosotros";
        return view('plantillas/header_view.php', $data).view("plantillas/nav_view.php").view("contenido/contacto.php").view("plantillas/footer_view.php");
    }

    public function comercializacion(): string {
        $data['titulo'] = "Comercializacion";
        return view('plantillas/header_view.php', $data).view("plantillas/nav_view.php").view("contenido\comercio.php").view("plantillas/footer_view.php");
    }

    public function producto(): string {
        $data['titulo'] = "Productos";
        $model = new JuegoModel();
        $data['productos'] = $model->obtenerJuegosConCategoria();
        return view('plantillas/header_view.php', $data).view("plantillas/nav_view.php").view("contenido\productos_view.php", $data).view("plantillas/footer_view.php");
    }

    public function productosAside($nombreCategoria): string {
        $data['titulo'] = "Productos";
        $model = new JuegoModel();
        $data['productos'] = $model
        ->select('tab_juegos.*, tab_categoria.categoria_descripcion')
        ->join('tab_categoria', 'tab_categoria.categoria_id = tab_juegos.categoria_id')
        ->where('tab_categoria.categoria_descripcion', urldecode($nombreCategoria))
        ->where('tab_juegos.juego_estado', 1)
        ->findAll();

        return view('plantillas/header_view.php', $data)
         . view('plantillas/nav_view.php')
         . view('contenido/productos_view.php', $data)
         . view('plantillas/footer_view.php');
        }

    public function terminosYcondiciones(): string {
        $data['titulo'] = "terminos de Uso";
        return view('plantillas/header_view.php', $data).view("plantillas/nav_view.php").view("contenido/terminosyusos.php").view("plantillas/footer_view.php");
    }
    
     public function inicio(): string {
        $data['titulo'] = "Inicio";
        return view('plantillas/header_view.php', $data).view("plantillas/nav_view.php").view("contenido/inicio.php").view("plantillas/footer_view.php");
    }

    public function crearcuenta(): string {
        $data['titulo'] = "CrearCueenta ";
        return view('plantillas/header_view.php', $data).view("plantillas/nav_view.php").view("contenido/crearcuenta.php").view("plantillas/footer_view.php");
    }
} 