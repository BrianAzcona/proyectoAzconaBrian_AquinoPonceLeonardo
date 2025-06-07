<div class="container my-4">
    <!-- Usamos el título que envía el controlador -->
    <h2><?= esc($titulo) ?></h2>

    <?php if (! empty($items)) : ?>
        <ul style="list-style:none; padding:0;">
            <?php $total = 0; ?>
            <?php foreach ($items as $item): ?>
                <li style="padding:10px; margin-bottom:10px; background:#f1f1f1; border-radius:5px;">
                    <strong><?= esc($item['name']) ?></strong><br>
                    Cantidad: <?= esc($item['qty']) ?><br>
                    Precio unitario: $<?= number_format($item['price'], 2) ?><br>
                    Subtotal: $<?= number_format($item['subtotal'], 2) ?>

                    <div style="margin-top:10px;">
                        <a href="<?= site_url('eliminar_item/' . $item['rowid']) ?>"
                           style="color:#007BFF; text-decoration:none;">
                           Eliminar
                        </a>
                    </div>
                </li>
                <?php $total += $item['subtotal']; ?>
            <?php endforeach; ?>
        </ul>

        <div style="font-weight:bold; margin-top:20px;">
            Total: $<?= number_format($total, 2) ?>
        </div>

        <div style="margin-top:15px;">
            <a href="<?= site_url('vaciar_carrito/all') ?>"
               style="color:#FF0000; text-decoration:none;">
               Vaciar carrito
            </a>
        </div>
    <?php else: ?>
        <p>El carrito está vacío.</p>
    <?php endif; ?>
</div>
