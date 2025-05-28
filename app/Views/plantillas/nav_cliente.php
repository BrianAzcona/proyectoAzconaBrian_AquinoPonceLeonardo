<?php if ($this->session->userdata('tipo') == 'cliente'): ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCliente"
            aria-controls="navbarCliente" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCliente">
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
                    <a class="nav-link" href="<?php echo base_url('ayuda'); ?>">Ayuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('carrito'); ?>">Ver Carrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold"><?php echo $this->session->userdata('nombre'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="<?php echo base_url('logout'); ?>">Salir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php endif; ?>