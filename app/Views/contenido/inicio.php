<div class="pagina-inicio">
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="contacto-infor col-md-5 col-lg-4">
            <div class="text-center mb-4">
                <i class="fas fa-circle-user"></i>
            </div>
            <h3 class="titulo-morado text-center mb-3">Inicia Sesión</h3>
            <p class="text-muted text-center mb-4">Accede a tu cuenta para continuar.</p>
            <form action="/login" method="POST">
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group mb-4">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary fw-bold w-100">Iniciar Sesión</button>
            </form>

            <a href="<?php echo base_url('crearcuenta'); ?>" class="btn btn-primary w-100">Crear Cuenta</a>
        </div>
    </div>
</div>