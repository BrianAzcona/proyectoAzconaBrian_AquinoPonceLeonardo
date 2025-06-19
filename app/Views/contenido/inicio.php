<?php if (session()->getFlashdata('mensaje_error')): ?>
<div class="alert alert-danger">
    <?= session()->getFlashdata('mensaje_error') ?>
</div>
<?php endif; ?>
<?php if (isset($mensaje)): ?>
<!-- Modal -->
<div class="modal fade" id="mensajeModal" tabindex="-1" aria-labelledby="mensajeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="mensajeModalLabel">Registro Exitoso</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <?= esc($mensaje) ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>



<script>
// Mostrar modal automáticamente
window.addEventListener('DOMContentLoaded', function() {
    var modal = new bootstrap.Modal(document.getElementById('mensajeModal'));
    modal.show();
});
</script>
<?php endif; ?>


<div class="pagina-inicio">
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="contacto-infor col-md-5 col-lg-4">
            <div class="text-center mb-4">
                <i class="fas fa-circle-user"></i>
            </div>
            <h3 class="titulo-morado text-center mb-3">Inicia Sesión</h3>
            <p class="text-muted text-center mb-4">Accede a tu cuenta para continuar.</p>
            <form action="<?= base_url ('cliente/iniciarSesion') ?>" method="POST">

                <?php if (session('validation')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach (session('validation')->getErrors() as $error): ?>
                        <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <div class="form-group mb-3">
                    <label for="email" class="form-label">Correo Electrónico:</label>
                    <input type="email" id="cliente_correo" name="cliente_correo" class="form-control"
                        value="<?= old('cliente_correo') ?>">
                </div>
                <div class="form-group mb-4">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" id="cliente_password" name="cliente_password" class="form-control"
                        value="<?= old('cliente_password') ?>">
                </div>
                <button type="submit" class="btn btn-primary fw-bold w-100">Iniciar Sesión</button>
            </form>

            <a href="<?php echo base_url('crearCuenta'); ?>" class="btn btn-primary w-100">Crear Cuenta</a>
        </div>
    </div>
</div>