<?php

namespace App\Controllers;

use App\Models\JuegoModel;

use App\Models\CategoriaModel;

class JuegoController extends BaseController
{
    public function index()
    {
        $model = new JuegoModel();
        $data['juegos'] = $model->findAll();
        $data['titulo'] = 'Listado de Juegos';

        return view('plantillas/header_view', $data)
            . view('plantillas/nav_view')
            . view('contenido/juegos_listado', $data)
            . view('plantillas/footer_view');
    }

    public function listar_juegos()
    {
        $juegoModel = new JuegoModel();

        $data['juegos'] = $juegoModel
            ->where('juego_estado', 'activo')
            ->where('juego_stock >', 0)
            ->join('tab_categoria', 'tab_categoria.categoria_id = tab_juego.categoria_id')
            ->findAll();

        $data['titulo'] = 'Catálogo de juegos';

        return view('plantillas/header_view.php', $data)
        . view('plantillas/nav_view.php')
        . view('contenido/productos_view.php', $data)
        . view('plantillas/footer_view.php');
}


public function form_agregar_juego() {
    $categoriaModel = new CategoriaModel();

    // Cargar todas las categorías para el formulario
    $data['categorias'] = $categoriaModel->findAll();
    $data['titulo'] = 'Agregar juego';

    return view('plantillas/encabezado', $data)
        . view('plantillas/navegar_admin_view')
        . view('contenidoAdmin/registrarProducto_view', $data);  // ajusta la vista que usas
}


    public function registroProducto()
    {
        // Verificar si el usuario está logueado y es administrador
        if (! session()->get('isLoggedIn') || session()->get('perfil_id') != 1) {
            return redirect()->to('cliente/iniciarSesion');
        }
        $categoriaModel = new CategoriaModel();
        $data['categorias'] = $categoriaModel->findAll();
        $data['titulo'] = "Registrar producto";
    
        return view('plantillas/header_view.php', $data)
            . view('plantillas/nav_view.php')
            . view('contenidoAdmin/registrarProducto_view.php', $data)
            . view('plantillas/footer_view.php');
    }


    public function agregarJuego()
    {
       

        $validation = \Config\Services::validation();
        $request = \Config\Services::request();
    
        $validation->setRules([
            'juego_nombre'       => 'required|max_length[100]',
            'juego_plataforma'   => 'required|max_length[50]',
            'juego_descripcion'  => 'required|max_length[255]',
            'juego_stock'        => 'required|integer',
            'juego_precio'       => 'required|decimal',
            'juego_imagen'       => 'uploaded[juego_imagen]|max_size[juego_imagen,4096]|is_image[juego_imagen]',
            'categoria_id'       => 'required|integer|is_not_unique[tab_categoria.categoria_id]',
            'juego_estado'       => 'required|in_list[1,0]'
        ], [
            'juego_nombre' => [
                'required'   => 'El nombre del juego es obligatorio.',
                'max_length' => 'Máximo 100 caracteres.'
            ],
            'juego_plataforma' => [
                'required'   => 'La plataforma es obligatoria.',
                'max_length' => 'Máximo 50 caracteres.'
            ],
            'juego_descripcion' => [
                'required'   => 'La descripción es obligatoria.',
                'max_length' => 'Máximo 255 caracteres.'
            ],
            'juego_stock' => [
                'required' => 'El stock es obligatorio.',
                'integer'  => 'Debe ser un número entero.'
            ],
            'juego_precio' => [
                'required' => 'El precio es obligatorio.',
                'decimal'  => 'Debe ser un número decimal válido.'
            ],
            'juego_imagen' => [
                'uploaded'   => 'Debe seleccionar una imagen.',
                'is_image'   => 'El archivo debe ser una imagen válida.',
                'max_size'   => 'La imagen no debe superar los 4MB.'
            ],
            'categoria_id' => [
                'required'       => 'La categoría es obligatoria.',
                'integer'        => 'Debe ser un número válido.',
                'is_not_unique'  => 'Debe seleccionar una categoría válida.'
            ],
            'juego_estado' => [
                'required' => 'El estado es obligatorio.',
                'in_list'  => 'Debe ser "activo" o "inactivo".'
            ]
        ]);
    
        if ($validation->withRequest($request)->run()) {
            $img = $this->request->getFile('juego_imagen');
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH . 'public/assets/uploads', $nombre_aleatorio);
    
            $data = [
                'juego_nombre'      => $request->getPost('juego_nombre'),
                'juego_plataforma'  => $request->getPost('juego_plataforma'),
                'juego_descripcion' => $request->getPost('juego_descripcion'),
                'juego_stock'       => $request->getPost('juego_stock'),
                'juego_precio'      => $request->getPost('juego_precio'),
                'juego_imagen'      => $nombre_aleatorio,
                'categoria_id'      => $request->getPost('categoria_id'),
                'juego_estado'      => (int) $request->getPost('juego_estado')
            ];
    
            $juego = new JuegoModel();
            $juego->insert($data);
    
            return redirect()->route('registrarProducto')->with('mensaje', 'El juego se registró correctamente');
        } else {
            $categoria = new CategoriaModel();
            $data['validation'] = $validation;

            $data['categorias'] = $categoria->findAll();
            $data['titulo'] = "Agregar Juego";
    
            return view('plantillas/header_view', $data)
                . view('plantillas/nav_view')
                . view('contenidoAdmin/registrarProducto_view.php', $data)
                . view('plantillas/footer_view');
        }
    }
    

    /*public function crear()
    {
        helper('form');

        if (! $this->request->is('post')) {
            return view('plantillas/header_view', ['titulo' => 'Nuevo Juego'])
                . view('plantillas/nav_view')
                . view('contenido/juego_form')
                . view('plantillas/footer_view');
        }

        $validation = \Config\Services::validation();

        $validation->setRules([
            'juego_nombre'      => 'required',
            'juego_plataforma'  => 'required',
            'juego_descripcion' => 'required',
            'juego_stock'       => 'required|integer',
            'juego_precio'      => 'required|decimal',
            'categoria_id'      => 'required|integer',
            'juego_estado'      => 'required'
        ]);

        $data = $this->request->getPost(array_keys($validation->getRules()));

        if (! $validation->run($data)) {
            return view('plantillas/header_view', ['titulo' => 'Nuevo Juego'])
                . view('plantillas/nav_view')
                . view('contenido/juego_form', ['validation' => $validation])
                . view('plantillas/footer_view');
        }

        $validData = $validation->getValidated();
        $model = new JuegoModel();
        $model->insert($validData);

        return redirect()->to('/juegos');
    }*/
}