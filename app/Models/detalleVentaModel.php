<?php

namespace App\Models;
use CodeIgniter\Model;

class DetalleVentaModel extends Model
{
    protected $table      = 'tab_detalleventa';
    protected $primaryKey = 'detalleVenta_id ';

    protected $allowedFields = ['ventas_id', 'juego_id', 'detalle_cantidad', 'detalle_precio'];

    protected $useTimestamps = false;
}