<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('nosotros'); ?>">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('productos'); ?>">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('contacto'); ?>">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Ayuda'); ?>">Ayuda</a>
                </li>

                <?php if (session()->get('isLoggedIn')): ?>
                <!-- Opciones visibles solo si el cliente está logueado -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('cliente/inicioCliente'); ?>">
                        <?= esc(session()->get('cliente_nombre')) ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('carrito'); ?>">Ver Carrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="<?= base_url('cliente/cerrarSesion'); ?>">Salir</a>
                </li>
                <?php else: ?>


                <?php endif; ?>
            </ul>
        </div>

    </div>
</nav>