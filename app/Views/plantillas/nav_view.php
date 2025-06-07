<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                <?php if (session()->get('isLoggedIn')): ?>
                <?php if (session()->get('perfil_id') == 1): ?>
                <!-- SOLO ADMIN -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('consultas'); ?>">Ver consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('productos/listar'); ?>">Listar productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('ventas'); ?>">Listar ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('registrarProducto'); ?>">Registrar producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('productos/gestionar'); ?>">Gestionar productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold"><?php echo esc(session()->get('nombre')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="<?php echo base_url('logout'); ?>">Salir</a>
                </li>

                <?php else: ?>
                <!-- CLIENTE -->
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
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('cliente/inicioCliente'); ?>">
                        <?= esc(session()->get('cliente_nombre')) ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('ver_carrito'); ?>">Ver Carrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="<?= base_url('cliente/cerrarSesion'); ?>">Salir</a>
                </li>
                <?php endif; ?>
                <?php else: ?>
                <!-- Visitante sin sesión -->
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
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('cliente/iniciarSesion'); ?>">Iniciar Sesión</a>
                </li>
                <?php endif; ?>

            </ul>
        </div>

    </div>
</nav>