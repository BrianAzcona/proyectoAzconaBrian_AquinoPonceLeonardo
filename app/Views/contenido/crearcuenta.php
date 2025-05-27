<div class="pagina-inicio">
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="contacto-infor col-md-5 col-lg-4">
            <div class="text-center mb-4">
                <i class="fas fa-user-plus" style="font-size: 3rem; color: blueviolet;"></i>
                <!-- Icono de usuario para crear cuenta -->
            </div>
            <h3 class="fw-bold text-center mb-3" style="color: blueviolet;">Crea una Cuenta</h3>
            <p class="text-muted text-center mb-4">Regístrate para empezar a disfrutar de nuestros servicios.</p>
            <form action="<?= base_url('crearCuenta') ?>" method="POST">

                <?php if (isset($validation)): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($validation->getErrors() as $error): ?>
                        <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>



                <!-- Nombre Completo -->
                <div class="form-group mb-3">
                    <label for="nombre" class="form-label fw-semibold" style="color: black;">Nombre:</label>
                    <input type="text" id="cliente_nombre" name="cliente_nombre" class="form-control" required>
                </div>
                <!-- Apellido -->
                <div class="form-group mb-3">
                    <label for="apellido" class="form-label fw-semibold" style="color: black;">Apellido:</label>
                    <input type="text" id="cliente_apellido" name="cliente_apellido" class="form-control" required>

                </div>
                <!-- DNI -->
                <div class="form-group mb-3">
                    <label for="dni" class="form-label fw-semibold" style="color: black;">DNI:</label>
                    <input type="text" id="cliente_dni" name="cliente_dni" class="form-control" required>

                </div>
                <!-- Correo Electrónico -->
                <div class="form-group mb-3">
                    <label for="email" class="form-label fw-semibold" style="color: black;">Correo Electrónico:</label>
                    <input type="email" id="cliente_correo" name="cliente_correo" class="form-control" required>

                </div>
                <!-- Contraseña -->
                <div class="form-group mb-4">
                    <label for="password" class="form-label fw-semibold" style="color: black;">Contraseña:</label>
                    <input type="password" id="cliente_password" name="cliente_password" class="form-control" required>

                </div>
                <!-- Repetir Contraseña -->
                <div class="form-group mb-4">
                    <label for="confirm-password" class="form-label fw-semibold" style="color: black;">Repetir
                        Contraseña:</label>
                    <input type="password" id="cliente_repassword" name="cliente_repassword" class="form-control"
                        required>

                </div>
                <!-- País -->
                <div class="form-group mb-3">
                    <label for="pais" class="form-label fw-semibold" style="color: black;">País:</label>
                    <input type="text" id="cliente_pais" name="cliente_pais" class="form-control" required>

                </div>

                <!-- Provincia -->
                <div class="form-group mb-3">
                    <label for="provincia" class="form-label fw-semibold" style="color: black;">Provincia:</label>
                    <input type="text" id="cliente_provincia" name="cliente_provincia" class="form-control" required>

                </div>

                <!-- Ciudad -->
                <div class="form-group mb-3">
                    <label for="ciudad" class="form-label fw-semibold" style="color: black;">Ciudad:</label>
                    <input type="text" id="cliente_ciudad" name="cliente_ciudad" class="form-control" required>

                </div>

                <!-- Teléfono -->
                <div class="form-group mb-3">
                    <label for="telefono" class="form-label fw-semibold" style="color: black;">Teléfono:</label>
                    <input type="text" id="cliente_telefono" name="cliente_telefono" class="form-control" required>

                </div>

                <!-- Perfil ID oculto -->
                <input type="hidden" name="perfil_id" value="2">

                <!-- Botón Crear Cuenta -->
                <button type="submit" class="btn btn-primary fw-bold w-100">Crear Cuenta</button>
            </form>
            <p class="text-center mt-3">¿Ya tienes una cuenta?
                <a href="<?php echo base_url('inicio'); ?>" class="text-primary" style="color: blueviolet;">Inicia
                    sesión aquí</a>
            </p>
        </div>
    </div>
</div>