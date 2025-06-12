<?php

namespace App\Models;
use CodeIgniter\Model;

class DetalleVentaModel extends Model
{
    protected $table      = 'tab_detalleventa';
    protected $primaryKey = ''; // No hay clave primaria definida

    protected $allowedFields = ['venta_id', 'juego_id', 'detalle_cantidad', 'detalle_precio'];

    protected $useTimestamps = false;
}
