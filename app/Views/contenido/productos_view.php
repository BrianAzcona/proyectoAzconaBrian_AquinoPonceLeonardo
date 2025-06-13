<?php if (session()->getFlashdata('compra_exitosa')): ?>
<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    <?= esc(session()->getFlashdata('compra_exitosa')) ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
</div>
<?php endif; ?>

<div class="layout">
    <aside class="menu-categorias">
        <h2>Categorías</h2>
        <ul>
            <li><a href="<?= base_url('productos/categoria/Aventura') ?>">Aventura</a></li>
            <li><a href="<?= base_url('productos/categoria/Terror') ?>">Terror</a></li>
            <li><a href="<?= base_url('productos/categoria/Carreras') ?>">Carreras</a></li>
            <li><a href="<?= base_url('productos/categoria/Souls') ?>">Souls</a></li>
            <li><a href="<?= base_url('productos/categoria/Roles') ?>">Roles</a></li>
            <li><a href="<?= base_url('productos/categoria/Simulacion') ?>">Simulacion</a></li>
            <li><a href="<?= base_url('productos/categoria/Supervivencia') ?>">Supervivencia</a></li>
            <li><a href="<?= base_url('productos/categoria/Deportes') ?>">Deportes</a></li>
        </ul>
    </aside>
    <div class="contenido-principal">
        <div class="container my-5">

            <div class=" row g-4 justify-content-center">
                <?php foreach ($productos as $row): ?>
                <div class="col-lg-2 col-md-4" style="min-width: 12rem; max-width: 12rem;">
                    <div class="card h-100">
                        <img src="<?= base_url('assets/uploads/' . $row['juego_imagen']) ?>" class="card-img-top"
                            alt="<?= esc($row['juego_nombre']) ?>">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold"><?= esc($row['juego_nombre']) ?></h5>
                            <p class="card-text">
                                Desde <span class="fw-bold">$<?= esc($row['juego_precio']) ?> ARS</span><br>
                                Plataforma: <span class="fw-bold"><?= esc($row['juego_plataforma']) ?> ARS</span><br>
                                Stock: <span class="fw-bold"><?= esc($row['juego_stock']) ?></span> unidades
                            </p>

                            <div class="mt-auto d-flex flex-column gap-2">
                                <?php if (session('isLoggedIn')): ?>
                                <?= form_open('agregar_carrito') ?>
                                <?= form_hidden('id', $row['juego_id']) ?>
                                <?= form_hidden('nombre', $row['juego_nombre']) ?>
                                <?= form_hidden('precio', $row['juego_precio']) ?>
                                <?= form_submit('comprar', 'Agregar al carrito', "class='btn btn-primary'") ?>
                                <?= form_close() ?>


                                <?php else: ?>
                                <a href="<?= base_url('inicio') ?>" class="btn btn-primary">Comprar</a>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>


        </div>





    </div>
</div>