<div class="container py-4">
    <h2 class="mb-4">Consultas de Clientes</h2>
    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Correo Electronico</th>
                <th>Asunto</th>
                <th>Num. de Orden</th>
                <th>Precio</th>
                <th>Stock</th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($consultas as $row): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><img src="<?= base_url('assets/uploads/' . $row['juego_imagen']) ?>" width="60" alt="imagen">
                </td>
                <td><?= esc($row['juego_nombre']) ?></td>
                <td><?= esc($row['juego_plataforma']) ?></td>
                <td style="max-width: 200px; white-space: normal; word-wrap: break-word;">
                    <?= esc($row['juego_descripcion']) ?>
                </td>
                <td><?= esc($row['categoria_descripcion']) ?></td>
                <td>$<?= esc($row['juego_precio']) ?></td>
                <td><?= esc($row['juego_stock']) ?></td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>