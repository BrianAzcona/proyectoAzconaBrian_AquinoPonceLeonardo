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

<div class="container text-center my-5">
    <div class="row align-items-start">
        <div class="col-md-6">
            <div class="formulario-contacto-soporte p-4 shadow rounded-4 bg-light">
                <h3 class="mb-4 fw-bold text-primary">Comunícate con Soporte</h3>
                <p class="text-muted mb-4">Completa el siguiente formulario y nuestro equipo se pondrá en contacto
                    contigo a la brevedad.</p>
                <form action="<?= base_url('consulta') ?>" method="POST">

                    <?php if (isset($validation)): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php foreach ($validation->getErrors() as $error): ?>
                            <li><?= esc($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                    <div class="form-group mb-3 text-start">
                        <label for="apellido" class="form-label fw-semibold" style="color: black">Apellido:</label>
                        <input type=" text" id="apellido" name="apellido" class="form-control">
                    </div>
                    <div class="form-group mb-3 text-start">
                        <label for="nombre" class="form-label fw-semibold" style="color: black">Nombre:</label>
                        <input type=" text" id="nombre" name="nombre" class="form-control">
                    </div>
                    <div class="form-group mb-3 text-start">
                        <label for="email" class="form-label fw-semibold" style="color: black">Correo
                            Electrónico:</label>
                        <input type="email" id="correo" name="correo" class="form-control">
                    </div>
                    <div class="form-group mb-3 text-start">
                        <label for="asunto" class="form-label fw-semibold" style="color: black">Asunto:</label>
                        <input type="text" id="asunto" name="asunto" class="form-control">
                    </div>
                    <div class="form-group mb-3 text-start">
                        <label for="numeroOrden" class="form-label fw-semibold" style="color: black">Número de
                            orden(opcional):</label>
                        <input type="text" id="num_orden" name="num_orden" class="form-control">
                    </div>
                    <div class="form-group mb-3 text-start">
                        <label for="plataforma" class="form-label fw-semibold"
                            style="color: black">Plataforma(opcional):</label>
                        <input type="text" id="plataforma" name="plataforma" class="form-control">
                    </div>
                    <div class="form-group mb-4 text-start">
                        <label for="mensaje" class="form-label fw-semibold" style="color: black">Descripción del
                            Problema:</label>
                        <textarea id="consulta" name="consulta" class="consulta" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 fw-bold">Enviar Mensaje a Soporte</button>
                </form>
            </div>
        </div>

        <div class="col-md-6 mt-5 mt-md-0 text-start contacto-info">
            <h1 class="fw-bold text-primary mb-4">
                Contáctate con Nosotros
            </h1>
            <div class="contacto-infor p-4 shadow rounded-4">
                <h3 class="fw-bold text-secondary mb-3">Información de Contacto</h3>
                <p><strong>Titular de la Empresa:</strong> Azcona Brian Alexander & Aquino Ponce Leonardo Exequiel</p>
                <p><strong>Razón Social:</strong> CodiGames S.A</p>
                <p><strong>Domicilio Legal:</strong> Corrientes Capital, Lamadrid 1234</p>
                <p><strong>Teléfono:</strong> 0800 0025 5158</p>
                <p><strong>Email:</strong> CodiGames@gmail.com</p>
            </div>

            <div class="text-center mt-4">
                <img src="https://cdn-icons-png.freepik.com/512/3095/3095583.png" alt="Formulario de Contacto"
                    class="img-fluid rounded-4 shadow w-50">
            </div>
        </div>
    </div>
</div>