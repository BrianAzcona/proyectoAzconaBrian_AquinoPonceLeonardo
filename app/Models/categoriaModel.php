<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table            = 'tab_categoria'; // Cambiá esto si tu tabla se llama distinto
    protected $primaryKey       = 'categoria_id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'categoria_descripcion'
    ];

    protected $useTimestamps    = false;
    protected $createdField     = '';
    protected $updatedField     = '';
    protected $deletedField     = '';

    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
}