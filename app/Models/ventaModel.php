<?php

namespace App\Models;
use CodeIgniter\Model;

class VentaModel extends Model
{
    protected $table      = 'tab_ventas';
    protected $primaryKey = 'ventas_id';

    protected $allowedFields = ['cliente_id', 'ventas_fecha'];

    protected $useTimestamps = false;
}