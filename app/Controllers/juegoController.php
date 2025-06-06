<?php

namespace App\Controllers;

use App\Models\JuegoModel;

class JuegoController extends BaseController
{
    public function index()
    {
        $model = new JuegoModel();
        $data['juegos'] = $model->findAll();
        $data['titulo'] = 'Listado de Juegos';

        return view('plantillas/header_view', $data)
            . view('plantillas/nav_view')
            . view('contenido/juegos_listado', $data)
            . view('plantillas/footer_view');
    }

    public function listar_juegos()
    {
        $juegoModel = new JuegoModel();

        $data['juegos'] = $juegoModel
            ->where('juego_estado', 'activo')
            ->where('juego_stock >', 0)
            ->join('tab_categoria', 'tab_categoria.categoria_id = tab_juego.categoria_id')
            ->findAll();

        $data['titulo'] = 'Catálogo de juegos';

        return view('plantillas/header_view.php', $data)
        . view('plantillas/nav_view.php')
        . view('contenido/productos_view.php', $data)
        . view('plantillas/footer_view.php');
}

    public function crear()
    {
        helper('form');

        if (! $this->request->is('post')) {
            return view('plantillas/header_view', ['titulo' => 'Nuevo Juego'])
                . view('plantillas/nav_view')
                . view('contenido/juego_form')
                . view('plantillas/footer_view');
        }

        $validation = \Config\Services::validation();

        $validation->setRules([
            'juego_nombre'      => 'required',
            'juego_plataforma'  => 'required',
            'juego_descripcion' => 'required',
            'juego_stock'       => 'required|integer',
            'juego_precio'      => 'required|decimal',
            'categoria_id'      => 'required|integer',
            'juego_estado'      => 'required'
        ]);

        $data = $this->request->getPost(array_keys($validation->getRules()));

        if (! $validation->run($data)) {
            return view('plantillas/header_view', ['titulo' => 'Nuevo Juego'])
                . view('plantillas/nav_view')
                . view('contenido/juego_form', ['validation' => $validation])
                . view('plantillas/footer_view');
        }

        $validData = $validation->getValidated();
        $model = new JuegoModel();
        $model->insert($validData);

        return redirect()->to('/juegos');
    }
}