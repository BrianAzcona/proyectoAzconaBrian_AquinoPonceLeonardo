<?php

namespace App\Controllers;

use App\Models\JuegoModel;

use App\Models\CategoriaModel;

use App\Models\VentaModel;

use App\Models\DetalleVentaModel;

class VentaController extends BaseController
{
    public function ventasAdmin(): string {
        $data['titulo'] = "Ventas";
    
        $ventaModel = new VentaModel();
    
        $query = $ventaModel->builder()
            ->select('tab_ventas.ventas_id,
                    tab_ventas.ventas_fecha,
                    tab_clientes.cliente_nombre,
                    tab_clientes.cliente_apellido,
                    tab_clientes.cliente_correo,
                    tab_detalleventa.juego_id,
                    tab_detalleventa.detalle_cantidad,
                    tab_detalleventa.detalle_precio,
                    tab_juegos.juego_nombre,
                    tab_juegos.juego_plataforma')
            ->join('tab_clientes', 'tab_clientes.cliente_id = tab_ventas.cliente_id')
            ->join('tab_detalleventa', 'tab_detalleventa.ventas_id = tab_ventas.ventas_id')
            ->join('tab_juegos', 'tab_juegos.juego_id = tab_detalleventa.juego_id')
            ->get();
    
            $data['ventas'] = $query->getResultArray();
    
        return view('plantillas/header_view.php', $data)
             . view("plantillas/nav_view.php")
             . view("contenidoAdmin/ventas_view.php", $data)
             . view("plantillas/footer_view.php");
    }
    
    
}