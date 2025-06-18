<div class="container py-4">
    <div class="bg-gradient bg-info text-white py-3 px-4 rounded shadow text-center mb-4">
        <h2 class="m-0 fw-semibold">🛒 Ventas Realizadas</h2>
    </div>
    <form method="get" class="mb-4">
        <div class="input-group">
            <input type="text" name="dni" class="form-control" placeholder="Filtrar por DNI"
                value="<?= isset($_GET['dni']) ? esc($_GET['dni']) : '' ?>">
            <button class="btn btn-primary" type="submit">Buscar</button>

        </div>
    </form>
    <table class="table table-bordered table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>DNI</th>
                <th>Correo</th>
                <th>Fecha</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            $ventasAgrupadas = [];
            $dniFiltro = isset($_GET['dni']) ? trim($_GET['dni']) : '';
            foreach ($ventas as $venta) {
                if ($dniFiltro !== '' && strpos($venta['cliente_dni'], $dniFiltro) === false) {
                    continue; // Salta si no coincide con el filtro
                }
                $ventasAgrupadas[$venta['ventas_id']]['cliente'] = $venta['cliente_nombre'] . ' ' . $venta['cliente_apellido'];
                $ventasAgrupadas[$venta['ventas_id']]['correo'] = $venta['cliente_correo'];
                $ventasAgrupadas[$venta['ventas_id']]['dni'] = $venta['cliente_dni'];
                $ventasAgrupadas[$venta['ventas_id']]['pais'] = $venta['cliente_pais'];
                $ventasAgrupadas[$venta['ventas_id']]['provincia'] = $venta['cliente_provincia'];
                $ventasAgrupadas[$venta['ventas_id']]['ciudad'] = $venta['cliente_ciudad'];
                $ventasAgrupadas[$venta['ventas_id']]['telefono'] = $venta['cliente_telefono'];
                $ventasAgrupadas[$venta['ventas_id']]['fecha'] = $venta['ventas_fecha'];
                $ventasAgrupadas[$venta['ventas_id']]['detalles'][] = $venta;
            }
            ?>

            <?php foreach ($ventasAgrupadas as $id => $venta): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= esc($venta['cliente']) ?></td>
                <td><?= esc($venta['dni']) ?></td>
                <td><?= esc($venta['correo']) ?></td>
                <td><?= esc($venta['fecha']) ?></td>
                <td>
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalVenta<?= $id ?>">
                        Ver Detalle
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Aquí fuera de la tabla colocamos los modales -->
    <?php foreach ($ventasAgrupadas as $id => $venta): ?>
    <div class="modal fade" id="modalVenta<?= $id ?>" tabindex="-1" aria-labelledby="modalLabel<?= $id ?>"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel<?= $id ?>">Detalle de la Venta #<?= $id ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Cliente:</strong> <?= esc($venta['cliente']) ?></p>
                    <p><strong>DNI:</strong> <?= esc($venta['dni']) ?></p>
                    <p><strong>Telefonono:</strong> <?= esc($venta['telefono']) ?></p>
                    <p><strong>Correo:</strong> <?= esc($venta['correo']) ?></p>
                    <p><strong>Pais:</strong> <?= esc($venta['pais']) ?></p>
                    <p><strong>Provincia:</strong> <?= esc($venta['provincia']) ?></p>
                    <p><strong>Ciudad:</strong> <?= esc($venta['ciudad']) ?></p>

                    <p><strong>Fecha:</strong> <?= esc($venta['fecha']) ?></p>

                    <h6 class="mt-4">Juegos Comprados:</h6>
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>Juego</th>
                                <th>Plataforma</th>
                                <th>Cantidad</th>
                                <th>Precio Unitario</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($venta['detalles'] as $detalle): ?>
                            <tr>
                                <td><?= esc($detalle['juego_nombre']) ?></td>
                                <td><?= esc($detalle['juego_plataforma']) ?></td>
                                <td><?= esc($detalle['detalle_cantidad']) ?></td>
                                <td>$<?= esc(number_format($detalle['detalle_precio'], 2)) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>