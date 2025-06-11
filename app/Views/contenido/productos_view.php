<div class="layout">
    <aside class="menu-categorias">
        <h2>Categorías</h2>
        <ul>
            <li><a href="<?= base_url('productos/categoria/Aventura') ?>">Aventura</a></li>
            <li><a href="<?= base_url('productos/categoria/Terror') ?>">Terror</a></li>
            <li><a href="<?= base_url('productos/categoria/Carreras') ?>">Carreras</a></li>
            <li><a href="#rpg">RPG</a></li>
            <li><a href="#estrategia">Estrategia</a></li>
            <li><a href="#deportes">Deportes</a></li>
            <li><a href="#simulacion">Simulación</a></li>
        </ul>
    </aside>
    <div class="contenido-principal">
        <div class="container my-5 d-flex justify-content-center align-items-center">
            <div class=" row g-4 justify-content-center">
                <?php foreach ($productos as $row): ?>
                <div class="col-lg-2 col-md-4">
                    <div class="card h-100">
                        <img src="<?= base_url('assets/uploads/' . $row['juego_imagen']) ?>" class="card-img-top"
                            alt="<?= esc($row['juego_nombre']) ?>">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold"><?= esc($row['juego_nombre']) ?></h5>
                            <p class="card-text">
                                Desde <span class="fw-bold">$<?= esc($row['juego_precio']) ?> ARS</span><br>
                                Stock: <span class="fw-bold"><?= esc($row['juego_stock']) ?></span> unidades
                            </p>

                            <div class="mt-auto d-flex flex-column gap-2">
                                <?php if (session('isLoggedIn')): ?>
                                <?= form_open('agregar_carrito') ?>
                                <?= form_hidden('id', $row['juego_id']) ?>
                                <?= form_hidden('nombre', $row['juego_nombre']) ?>
                                <?= form_hidden('cantidad', (string)1) ?>
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