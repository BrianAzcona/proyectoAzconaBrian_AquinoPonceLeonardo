<?php

namespace App\Models;

use CodeIgniter\Model;

class Mensaje_Model extends Model
{
    protected $table            = 'mensaje';
    protected $primaryKey       = 'id_mensaje';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'apellido',
        'nombre',
        'correo',
        'asunto',
        'num_orden',
        'plataforma',
        'consulta'
    ];

    protected $useTimestamps    = false;
    protected $createdField     = '';
    protected $updatedField     = '';
    protected $deletedField     = '';

    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
}