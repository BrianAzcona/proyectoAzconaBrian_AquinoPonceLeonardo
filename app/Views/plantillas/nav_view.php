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
                    <a class="nav-link" href="<?php echo base_url('consultasAdministrador'); ?>">Ver consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('listarJuegos'); ?>">Listar productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('verVentas'); ?>">Listar ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('registrarProducto'); ?>">Registrar producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('gestionarProductos'); ?>">Gestionar productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/inicioAdmin'); ?>">
                        <?= esc(session()->get('cliente_nombre')) ?>
                    </a>
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