<?php $cart = \Config\Services::cart(); ?>

<h1 class="text-center"><?= esc($titulo) ?></h1>
<a href="<?= base_url('juegos') ?>" class="btn btn-success" role="button">Continuar comprando</a>

<?php if ($cart->contents() == NULL): ?>
<h2 class="text-center alert alert-danger mt-4">El carrito está vacío</h2>
<?php else: ?>

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
            <td><?= esc($item['id']) ?></td>
            <td>$ <?= number_format($item['price'], 2) ?></td>
            <td><?= esc($item['qty']) ?></td>
            <td>$ <?= number_format($item['subtotal'], 2) ?></td>
            <td>
                <a href="<?= base_url('carrito/borrar/' . $item['rowid']) ?>" class="btn btn-danger btn-sm">Eliminar</a>
            </td>
        </tr>
        <?php $total += $item['subtotal']; endforeach; ?>
        <tr>
            <td colspan="4" class="text-end"><strong>Total Compra:</strong></td>
            <td><strong>$ <?= number_format($total, 2) ?></strong></td>
            <td>
                <a href="<?= base_url('carrito/borrar/all') ?>" class="btn btn-warning btn-sm">Vaciar carrito</a>
                <a href="<?= base_url('ventas') ?>" class="btn btn-primary btn-sm">Ordenar compra</a>
            </td>
        </tr>
    </tbody>
</table>

<?php endif; ?>