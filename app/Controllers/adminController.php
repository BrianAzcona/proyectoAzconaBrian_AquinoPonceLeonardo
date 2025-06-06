<?php

namespace App\Controllers;

class Home extends BaseController
{
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
}