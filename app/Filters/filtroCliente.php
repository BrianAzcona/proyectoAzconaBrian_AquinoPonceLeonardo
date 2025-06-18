<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class MyFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    { 
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('inicio')->with('mensaje_error', 'Acceso restringido: solo clientes de la pagina');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) 
    {
        // Do something here
    }
}