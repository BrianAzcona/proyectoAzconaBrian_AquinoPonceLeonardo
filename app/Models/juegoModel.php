<?php

namespace App\Models;

use CodeIgniter\Model;

class JuegoModel extends Model
{
    protected $table            = 'tab_juegos'; // Nombre real de la tabla
    protected $primaryKey       = 'juego_id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'juego_nombre',
        'juego_plataforma',
        'juego_descripcion',
        'juego_stock',
        'juego_precio',
        'juego_imagen',
        'categoria_id',
        'juego_estado'
    ];

    protected $useTimestamps    = false;
    protected $createdField     = '';
    protected $updatedField     = '';
    protected $deletedField     = '';

    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    
    public function obtenerJuegosConCategoria()
    {
        return $this->select('tab_juegos.*, tab_categoria.categoria_descripcion')
                    ->join('tab_categoria', 'tab_categoria.categoria_id = tab_juegos.categoria_id')
                    ->findAll();
    }
}