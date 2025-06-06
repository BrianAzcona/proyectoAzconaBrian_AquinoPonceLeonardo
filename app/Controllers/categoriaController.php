<?php

namespace App\Controllers;

use App\Models\CategoriaModel;

class CategoriaController extends BaseController
{
    public function index()
    {
        $model = new CategoriaModel();
        $data['categorias'] = $model->findAll();
        $data['titulo'] = 'Listado de Categorías';

        return view('plantillas/header_view', $data)
            . view('plantillas/nav_view')
            . view('contenido/categorias_listado', $data)
            . view('plantillas/footer_view');
    }

    public function crear()
    {
        helper('form');

        if (! $this->request->is('post')) {
            return view('plantillas/header_view', ['titulo' => 'Nueva Categoría'])
                . view('plantillas/nav_view')
                . view('contenido/categoria_form')
                . view('plantillas/footer_view');
        }

        $validation = \Config\Services::validation();

        $validation->setRules([
            'categoria_descripcion' => 'required|max_length[100]'
        ], [
            'categoria_descripcion' => [
                'required'   => 'La descripción de la categoría es obligatoria.',
                'max_length' => 'La descripción no puede tener más de 100 caracteres.'
            ]
        ]);

        $data = $this->request->getPost(['categoria_descripcion']);

        if (! $validation->run($data)) {
            return view('plantillas/header_view', ['titulo' => 'Nueva Categoría'])
                . view('plantillas/nav_view')
                . view('contenido/categoria_form', ['validation' => $validation])
                . view('plantillas/footer_view');
        }

        $validData = $validation->getValidated();
        $model = new CategoriaModel();
        $model->insert($validData);

        return redirect()->to('/categorias');
    }
}