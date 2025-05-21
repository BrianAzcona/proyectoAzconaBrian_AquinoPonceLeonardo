<?php

namespace App\Controllers;

class Cliente extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        if (! $this->request->is('post')) {
            return view('clienteValidacion');
        }

        $rules = [
            'cliente_nombre'     => 'required|max_length[100]',
            'cliente_apellido'   => 'required|max_length[100]',
            'cliente_dni'        => 'required|numeric|max_length[20]',
            'cliente_correo'     => 'required|valid_email|max_length[254]',
            'cliente_password'   => 'required|min_length[8]|max_length[255]',
            'cliente_pais'       => 'required|max_length[100]',
            'cliente_provincia'  => 'required|max_length[100]',
            'cliente_ciudad'     => 'required|max_length[100]',
            'perfil_id'          => 'required|numeric',
            'cliente_telefono'   => 'required|numeric|max_length[20]'
        ];

        $data = $this->request->getPost(array_keys($rules));

        if (! $this->validateData($data, $rules)) {
            return view('clienteValidacion');
        }

        // Aquí podrías guardar los datos o redirigir
        $validData = $this->validator->getValidated();
        return view('success'); // Puedes crear una vista success.php para mostrar que fue exitoso
    }
}