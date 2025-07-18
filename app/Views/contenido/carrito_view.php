<?php $cart = \Config\Services::cart(); ?>

<h1 class="text-center"><?= esc($titulo) ?></h1>
<a href="<?= base_url('productos') ?>" class="btn btn-success" role="button">Continuar comprando</a>

<?php if ($cart->contents() == NULL): ?>
<h2 class="text-center alert alert-danger mt-4">El carrito está vacío</h2>
<?php else: ?>

<?php if (session()->getFlashdata('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('error') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
</div>
<?php endif; ?>


<table class="table table-bordered table-striped mt-4">
    <thead>
        <tr>
            <th>Nº ítem</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        $total = 0;
        foreach ($cart->contents() as $item):
        ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= esc($item['name']) ?></td>
            <td>$ <?= number_format($item['price'], 2) ?></td>
            <td><?= esc($item['qty']) ?></td>
            <td>$ <?= number_format($item['subtotal'], 2) ?></td>
            <td>
                <a href="<?= base_url('eliminar_item/' . $item['rowid']) ?>" class="btn btn-danger btn-sm">Eliminar</a>
            </td>
        </tr>
        <?php $total += $item['subtotal']; endforeach; ?>
        <tr>
            <td colspan="4" class="text-end"><strong>Total Compra:</strong></td>
            <td><strong>$ <?= number_format($total, 2) ?></strong></td>
            <td>
                <a href="<?= base_url('vaciar_carrito/all') ?>" class="btn btn-warning btn-sm">Vaciar carrito</a>
                <a href="<?= base_url('guardar_venta') ?>" class="btn btn-primary btn-sm">Ordenar compra</a>
            </td>
        </tr>
    </tbody>
</table>

<?php endif; ?>