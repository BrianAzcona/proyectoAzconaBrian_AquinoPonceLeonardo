<?php

namespace App\Controllers;

use App\Models\MensajeModel;

class MensajeController extends BaseController
{
    protected $helpers = ['form'];

    public function agregarConsulta()
    {
        if (! $this->request->is('post')) {
            $data['titulo'] = "Conectado con nosotros ";
            return view('plantillas/header_view.php', $data)
            . view("plantillas/nav_view.php")
            . view("contenido/contacto.php")
            . view("plantillas/footer_view.php");
        }

        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules([
            'apellido'   => 'required|max_length[50]',
            'nombre'     => 'required|max_length[50]',
            'correo'     => 'required|max_length[80]',
            'asunto'     => 'required|max_length[30]',
            'num_orden'  => 'permit_empty|max_length[50]',
            'plataforma' => 'permit_empty|max_length[100]',
            'consulta'   => 'required|max_length[50]'
        ], [
            'apellido' => [
                'required'   => 'El apellido es obligatorio.',
                'max_length' => 'El apellido no puede tener más de 50 caracteres.'
            ],
            'nombre' => [
                'required'   => 'El nombre es obligatorio.',
                'max_length' => 'El nombre no puede tener más de 50 caracteres.'
            ],
            'correo' => [
                'required'    => 'El correo electrónico es obligatorio.',
                'valid_email' => 'Debe ingresar un correo electrónico válido.',
                'max_length'  => 'El correo no puede tener más de 80 caracteres.'
            ],
            'asunto' => [
                'required'   => 'El asunto es obligatorio.',
                'max_length' => 'El asunto no puede tener más de 30 caracteres.'
            ],
            'num_orden' => [
                'max_length' => 'El número de orden no puede tener más de 50 caracteres.'
            ],
            'plataforma' => [
                'max_length' => 'La plataforma no puede tener más de 100 caracteres.'
            ],
            'consulta' => [
                'required'   => 'La consulta es obligatoria.',
                'max_length' => 'La consulta no puede tener más de 50 caracteres.'
            ]
        ]);
        

        $data = $this->request->getPost(array_keys($validation->getRules()));

        if (! $validation->run($data)) {
            $data['titulo'] = "Contacto ";
            return view('plantillas/header_view.php', $data)
                . view("plantillas/nav_view.php")
                . view("contenido/contacto.php", ['validation' => $validation])
                . view("plantillas/footer_view.php");
        }

        // Aquí podés guardar los datos o hacer lo que necesites con $data
        $validData = $validation->getValidated();


        // Por ejemplo, guardar en base de datos (si tenés modelo)
        // $this->mensajeModel->insert($validData);
        $model = new MensajeModel();
        $model->insert($validData);

        $data['mensaje'] = '¡Consulta enviada con éxito!';
        $data['titulo'] = "Conectado con nosotros ";
        
        return view('plantillas/header_view.php', $data)
            . view("plantillas/nav_view.php")
            . view("contenido/contacto.php", $data)
            . view("plantillas/footer_view.php");
    }
}