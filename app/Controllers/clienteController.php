<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class ClienteController extends BaseController
{
    protected $helpers = ['form'];

    public function agregarCliente()
    {
        if (! $this->request->is('post')) {
            $data['titulo'] = "CrearCueenta ";
            return view('plantillas/header_view.php', $data)
            .view("plantillas/nav_view.php")
            .view("contenido/crearcuenta.php")
            .view("plantillas/footer_view.php");
        }

        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules([
            'cliente_nombre'     => 'required|max_length[100]',
            'cliente_apellido'   => 'required|max_length[100]',
            'cliente_dni'        => 'required|numeric|max_length[20]',
            'cliente_correo'     => 'required|valid_email|is_unique[tab_clientes.cliente_correo]|max_length[254]',
            'cliente_password'   => 'required|min_length[8]|max_length[255]',
            'cliente_repassword' => 'required|matches[cliente_password]',
            'cliente_pais'       => 'required|max_length[100]',
            'cliente_provincia'  => 'required|max_length[100]',
            'cliente_ciudad'     => 'required|max_length[100]',
            'perfil_id'          => 'required|numeric',
            'cliente_telefono'   => 'required|numeric|max_length[20]'
        ], [
            // Mensajes personalizados
            'cliente_nombre' => [
                'required'    => 'El nombre es obligatorio.',
                'max_length'  => 'El nombre no puede tener más de 100 caracteres.'
            ],
            'cliente_apellido' => [
                'required'    => 'El apellido es obligatorio.',
                'max_length'  => 'El apellido no puede tener más de 100 caracteres.'
            ],
            'cliente_dni' => [
                'required'    => 'El DNI es obligatorio.',
                'numeric'     => 'El DNI debe contener solo números.',
                'max_length'  => 'El DNI no puede tener más de 20 caracteres.'
            ],
            'cliente_correo' => [
                'required'    => 'El correo es obligatorio.',
                'valid_email' => 'Debe ingresar un correo válido.',
                'is_unique'   => 'El correo ya se encuentra registrado.',
                'max_length'  => 'El correo no puede tener más de 254 caracteres.'
            ],
            'cliente_password' => [
                'required'    => 'La contraseña es obligatoria.',
                'min_length'  => 'La contraseña debe tener al menos 8 caracteres.',
                'max_length'  => 'La contraseña no puede tener más de 255 caracteres.'
            ],
            'cliente_repassword' => [
                'required'    => 'Debe repetir la contraseña.',
                'matches'     => 'Las contraseñas no coinciden.'
            ],
            'cliente_pais' => [
                'required'    => 'El país es obligatorio.',
                'max_length'  => 'El país no puede tener más de 100 caracteres.'
            ],
            'cliente_provincia' => [
                'required'    => 'La provincia es obligatoria.',
                'max_length'  => 'La provincia no puede tener más de 100 caracteres.'
            ],
            'cliente_ciudad' => [
                'required'    => 'La ciudad es obligatoria.',
                'max_length'  => 'La ciudad no puede tener más de 100 caracteres.'
            ],
            'perfil_id' => [
                'required'    => 'El perfil es obligatorio.',
                'numeric'     => 'El perfil debe ser un número válido.'
            ],
            'cliente_telefono' => [
                'required'    => 'El teléfono es obligatorio.',
                'numeric'     => 'El teléfono debe contener solo números.',
                'max_length'  => 'El teléfono no puede tener más de 20 caracteres.'
            ]
        ]);

        $data = $this->request->getPost(array_keys($validation->getRules()));

        if (! $validation->run($data)) {
            $data1['titulo'] = "CrearCuenta ";
            return view('plantillas/header_view.php', $data1)
                . view("plantillas/nav_view.php")
                . view("contenido/crearcuenta.php", ['validation' => $validation])
                . view("plantillas/footer_view.php");
        }
        
        $validData = $validation->getValidated();


        // Encriptar contraseña
        $validData['cliente_password'] = password_hash($validData['cliente_password'], PASSWORD_DEFAULT);

        // Guardar en la base de datos
        $model = new ClienteModel();
        $model->insert($validData);

        return view('contenido/QuienesSomos'); // Vista de éxito
    }
}