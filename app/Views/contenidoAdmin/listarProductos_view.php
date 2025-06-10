<div class="container py-4">
    <h2 class="mb-4">Lista de Productos</h2>
    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Plataforma</th>
                <th>Descripcion</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Estado</th>
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
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>