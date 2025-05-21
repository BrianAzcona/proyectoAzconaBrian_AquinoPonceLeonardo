<?php

namespace App\Controllers;

class Mensaje extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        if (! $this->request->is('post')) {
            return view('mensajeValidacion'); // La vista con el formulario de mensaje
        }

        $rules = [
            'apellido'    => 'required|max_length[100]',
            'nombre'      => 'required|max_length[100]',
            'correo'      => 'required|valid_email|max_length[254]',
            'asunto'      => 'required|max_length[255]',
            'num_orden'   => 'required|max_length[50]',
            'plataforma'  => 'required|max_length[100]',
            'consulta'    => 'required'
        ];

        $data = $this->request->getPost(array_keys($rules));

        if (! $this->validateData($data, $rules)) {
            return view('mensajeForm');
        }

        // Aquí podés guardar los datos o hacer lo que necesites con $data
        $validData = $this->validator->getValidated();

        // Por ejemplo, guardar en base de datos (si tenés modelo)
        // $this->mensajeModel->insert($validData);

        return view('success'); // Vista para mostrar mensaje de éxito
    }
}