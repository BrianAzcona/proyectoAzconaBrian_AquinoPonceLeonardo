<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class ClienteController extends BaseController
{
    protected $helpers = ['form'];

    public function agregarCliente()
    {
        if (! $this->request->is('post')) {
            $data['titulo'] = "CrearCuenta ";
            return view('plantillas/header_view.php', $data)
            .view("plantillas/nav_view.php")
            .view("contenido/crearcuenta.php")
            .view("plantillas/footer_view.php");
        }

        $validation = \Config\Services::validation();
        $request = \Config\Services::request();

        $validation->setRules([
            'cliente_nombre'     => 'required|max_length[50]',
            'cliente_apellido'   => 'required|max_length[50]',
            'cliente_dni'        => 'required|numeric|max_length[10]',
            'cliente_correo'     => 'required|valid_email|is_unique[tab_clientes.cliente_correo]|max_length[80]',
            'cliente_password'   => 'required|min_length[8]|max_length[20]',
            'cliente_repassword' => 'required|matches[cliente_password]',
            'cliente_pais'       => 'required|max_length[20]',
            'cliente_provincia'  => 'required|max_length[20]',
            'cliente_ciudad'     => 'required|max_length[20]',
            'perfil_id'          => 'required|numeric',
            'cliente_telefono'   => 'required|numeric|max_length[10]'
        ], [
            // Validaciones personalizadas
            'cliente_nombre' => [
                'required'    => 'El nombre es obligatorio.',
                'max_length'  => 'El nombre no puede tener más de 50 caracteres.'
            ],
            'cliente_apellido' => [
                'required'    => 'El apellido es obligatorio.',
                'max_length'  => 'El apellido no puede tener más de 50 caracteres.'
            ],
            'cliente_dni' => [
                'required'    => 'El DNI es obligatorio.',
                'numeric'     => 'El DNI debe contener solo números.',
                'max_length'  => 'El DNI no puede tener más de 10 caracteres.'
            ],
            'cliente_correo' => [
                'required'    => 'El correo es obligatorio.',
                'valid_email' => 'Debe ingresar un correo válido.',
                'is_unique'   => 'El correo ya se encuentra registrado.',
                'max_length'  => 'El correo no puede tener más de 80 caracteres.'
            ],
            'cliente_password' => [
                'required'    => 'La contraseña es obligatoria.',
                'min_length'  => 'La contraseña debe tener al menos 8 caracteres.',
                'max_length'  => 'La contraseña no puede tener más de 20 caracteres.'
            ],
            'cliente_repassword' => [
                'required'    => 'Debe repetir la contraseña.',
                'matches'     => 'Las contraseñas no coinciden.'
            ],
            'cliente_pais' => [
                'required'    => 'El país es obligatorio.',
                'max_length'  => 'El país no puede tener más de 20 caracteres.'
            ],
            'cliente_provincia' => [
                'required'    => 'La provincia es obligatoria.',
                'max_length'  => 'La provincia no puede tener más de 20 caracteres.'
            ],
            'cliente_ciudad' => [
                'required'    => 'La ciudad es obligatoria.',
                'max_length'  => 'La ciudad no puede tener más de 20 caracteres.'
            ],
            'perfil_id' => [
                'required'    => 'El perfil es obligatorio.',
                'numeric'     => 'El perfil debe ser un número válido.'
            ],
            'cliente_telefono' => [
                'required'    => 'El teléfono es obligatorio.',
                'numeric'     => 'El teléfono debe contener solo números.',
                'max_length'  => 'El teléfono no puede tener más de 10 caracteres.'
            ]
        ]);

        $data = $this->request->getPost(array_keys($validation->getRules()));

        if (! $validation->run($data)) {
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        
        $validData = $validation->getValidated();

        // Encriptar contraseña
        $validData['cliente_password'] = password_hash($validData['cliente_password'], PASSWORD_DEFAULT);

        // Guardar en la base de datos
        $model = new ClienteModel();
        $model->insert($validData);

        $data['mensaje'] = '¡Registro exitoso! Bienvenido a la plataforma.';
        $data['titulo'] = 'Inicio';

        return view('plantillas/header_view.php', $data)
            . view("plantillas/nav_view.php")
            . view("contenido/inicio.php", $data)
            . view("plantillas/footer_view.php");
    }

    public function iniciarSesion()
{
    if (! $this->request->is('post')) {
        $data['titulo'] = "Iniciar Sesión";
        return view('plantillas/header_view.php', $data)
            . view("plantillas/nav_view.php")
            . view("contenido/inicio.php")
            . view("plantillas/footer_view.php");
    }

    $validation = \Config\Services::validation();
    $request = \Config\Services::request();

    $validation->setRules([
        'cliente_correo'   => 'required|valid_email',
        'cliente_password' => 'required'
    ], [
        'cliente_correo' => [
            'required'    => 'El correo es obligatorio.',
            'valid_email' => 'Debe ingresar un correo válido.'
        ],
        'cliente_password' => [
            'required' => 'La contraseña es obligatoria.'
        ]
    ]);

    $data = $request->getPost(['cliente_correo', 'cliente_password']);

    if (! $validation->run($data)) {
        return redirect()->back()->withInput()->with('validation', $validation);
    }

    $model = new ClienteModel();
    $cliente = $model->where('cliente_correo', $data['cliente_correo'])->first();

    if (! $cliente || ! password_verify($data['cliente_password'], $cliente['cliente_password'])) {
        $validation->setError('cliente_correo', 'Correo o contraseña incorrectos.');
        return redirect()->back()->withInput()->with('validation', $validation);
    }

    
    session()->set([
        'cliente_id'      => $cliente['cliente_id'],
        'cliente_nombre'  => $cliente['cliente_nombre'],
        'cliente_apellido'  => $cliente['cliente_apellido'],
        
        'cliente_correo'  => $cliente['cliente_correo'],
        'perfil_id'       => $cliente['perfil_id'],
        'isLoggedIn'      => true,
        'nombre'          => $cliente['cliente_nombre']
    ]);

    
    if ($cliente['perfil_id'] == 1) {
        return redirect()->to('admin/inicioAdmin'); 
    } else {
        return redirect()->to('cliente/inicioCliente'); 
    }
}

public function inicioCliente()
{
    // Verificar si el cliente está logueado
    if (! session()->get('isLoggedIn')) {
        return redirect()->to('cliente/iniciarSesion');
    }

    $data['titulo'] = "Inicio Cliente";
    $data['cliente_nombre'] = session()->get('cliente_nombre');

    return view('plantillas/header_view.php', $data)
        . view('plantillas/nav_view.php')
        . view('backend/inicio_cliente.php', $data)
        . view('plantillas/footer_view.php');
}

public function inicioAdmin()
{
    // Verificar si el usuario está logueado y es administrador
    if (! session()->get('isLoggedIn') || session()->get('perfil_id') != 1) {
        return redirect()->to('cliente/iniciarSesion');
    }

    $data['titulo'] = "Panel de Administración";
    $data['nombre'] = session()->get('nombre');

    return view('plantillas/header_view.php', $data)
        . view('plantillas/nav_view.php')
        . view('backend/inicio_admin.php', $data)
        . view('plantillas/footer_view.php');
}


    public function cerrarSesion()
    {
        session()->destroy(); 
        return redirect()->to('inicio');
    }
}