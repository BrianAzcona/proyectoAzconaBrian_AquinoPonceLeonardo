<?php

namespace App\Controllers;

class Perfil extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        if (! $this->request->is('post')) {
            return view('perfilValidacion'); // Vista del formulario de perfil
        }

        $rules = [
            'perfil_descripcion' => 'required|max_length[100]'
        ];

        $data = $this->request->getPost(array_keys($rules));

        if (! $this->validateData($data, $rules)) {
            return view('perfilForm');
        }

        $validData = $this->validator->getValidated();

        // Si tenés modelo, podrías guardar así:
        // $this->perfilModel->insert($validData);

        return view('success'); // Vista de éxito
    }
}