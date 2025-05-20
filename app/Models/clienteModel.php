<?php

namespace App\Models;

use CodeIgniter\Model;

class Cliente_Model extends Model
{
    protected $table            = 'tab_clientes';
    protected $primaryKey       = 'cliente_id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'cliente_nombre',
        'cliente_apellido',
        'cliente_dni',
        'cliente_correo',
        'cliente_password',
        'cliente_pais',
        'cliente_provincia',
        'cliente_ciudad',
        'perfil_id',
        'cliente_telefono'
    ];

    protected $useTimestamps    = false;
    protected $createdField     = '';
    protected $updatedField     = '';
    protected $deletedField     = '';

    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
}


