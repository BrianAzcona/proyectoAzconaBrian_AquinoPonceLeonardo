<?php

namespace App\Controllers;

class adminController extends BaseController
{
    public function registroProducto()
{
    // Verificar si el usuario está logueado y es administrador
    if (! session()->get('isLoggedIn') || session()->get('perfil_id') != 1) {
        return redirect()->to('cliente/iniciarSesion');
    }

    $data['titulo'] = "Registrar producto";

    return view('plantillas/header_view.php', $data)
        . view('plantillas/nav_view.php')
        . view('contenidoAdmin/registrarProducto_view.php')
        . view('plantillas/footer_view.php');
}
}