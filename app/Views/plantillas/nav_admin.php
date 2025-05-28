<?php if ($this->session->userdata('tipo') == 'admin'): ?>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin"
            aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarAdmin">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

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
                    <a class="nav-link" href="<?php echo base_url('productos/registrar'); ?>">Registrar producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('productos/gestionar'); ?>">Gestionar productos</a>
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