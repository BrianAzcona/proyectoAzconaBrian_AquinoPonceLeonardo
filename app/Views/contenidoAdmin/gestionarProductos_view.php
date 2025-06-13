<div class="container py-4">
    <h2 class="mb-4">Lista de Productos</h2>
    <a href="<?= base_url('registrarProducto') ?>" class="btn btn-success mb-3">Agregar Nuevo Producto</a>
    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Plataforma</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Estado</th>
                <th>Acciones</th> <!-- Nueva columna -->
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><img src="<?= base_url('assets/uploads/' . $producto['juego_imagen']) ?>" width="60" alt="imagen">
                </td>
                <td><?= esc($producto['juego_nombre']) ?></td>
                <td><?= esc($producto['juego_plataforma']) ?></td>
                <td style="max-width: 200px; white-space: normal; word-wrap: break-word;">
                    <?= esc($producto['juego_descripcion']) ?>
                </td>
                <td><?= esc($producto['categoria_descripcion']) ?></td>
                <td>$<?= esc($producto['juego_precio']) ?></td>
                <td><?= esc($producto['juego_stock']) ?></td>
                <td>
                    <span class="badge bg-<?= $producto['juego_estado'] ? 'success' : 'danger' ?>">
                        <?= $producto['juego_estado'] ? 'Activo' : 'Inactivo' ?>
                    </span>
                </td>
                <td>
                    <a href="<?= base_url('productos/editar/' . $producto['juego_id']) ?>"
                        class="btn btn-sm btn-primary">Editar</a>
                    <a href="<?= base_url('eliminarJuego/' . $producto['juego_id']) ?>"
                        class="btn btn-sm btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>