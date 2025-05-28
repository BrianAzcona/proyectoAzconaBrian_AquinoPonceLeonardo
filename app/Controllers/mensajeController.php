<?php

namespace App\Controllers;

use App\Models\MensajeModel;

class MensajeController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        if (! $this->request->is('post')) {
            return view('mensajeValidacion'); // La vista con el formulario de mensaje
        }

        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules([
            'apellido'   => 'required|max_length[50]',
            'nombre'     => 'required|max_length[50]',
            'correo'     => 'required|valid_email|max_length[80]',
            'asunto'     => 'required|max_length[30]',
            'num_orden'  => 'permit_empty|max_length[50]',      // ahora es opcional
            'plataforma' => 'permit_empty|max_length[100]',     // ahora es opcional
            'consulta'   => 'required'
        ], [
            
        ]);

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