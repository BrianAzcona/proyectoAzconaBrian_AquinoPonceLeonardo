<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="formulario-contacto-soporte p-4 shadow rounded-4 bg-light" style="max-width: 600px; width: 100%;">
        <h3 class="mb-4 fw-bold text-primary">Editar Producto</h3>
        <p class="text-muted mb-4">Modifica los datos del juego.</p>

        <form action="<?= base_url('actualizarJuego') ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= $producto['juego_id'] ?>">

            <?php if (isset($validation)): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($validation->getErrors() as $error): ?>
                    <li><?= esc($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('mensaje')): ?>
            <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('mensaje') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>

            <div class="form-group mb-3 text-start">
                <label for="juego_nombre" class="form-label fw-semibold" style="color: black;">Nombre:</label>
                <input type="text" id="juego_nombre" name="juego_nombre" class="form-control"
                    value="<?= old('juego_nombre', $producto['juego_nombre']) ?>">
            </div>

            <div class="form-group mb-3 text-start">
                <label for="juego_plataforma" class="form-label fw-semibold" style="color: black;">Plataforma:</label>
                <input type="text" id="juego_plataforma" name="juego_plataforma" class="form-control"
                    value="<?= old('juego_plataforma', $producto['juego_plataforma']) ?>">
            </div>

            <div class="form-group mb-3 text-start">
                <label for="juego_descripcion" class="form-label fw-semibold" style="color: black;">Descripción:</label>
                <textarea id="juego_descripcion" name="juego_descripcion" class="form-control"
                    rows="4"><?= old('juego_descripcion', $producto['juego_descripcion']) ?></textarea>
            </div>

            <div class="form-group mb-3 text-start">
                <label for="juego_stock" class="form-label fw-semibold" style="color: black;">Stock:</label>
                <input type="number" id="juego_stock" name="juego_stock" class="form-control"
                    value="<?= old('juego_stock', $producto['juego_stock']) ?>">
            </div>

            <div class="form-group mb-3 text-start">
                <label for="juego_precio" class="form-label fw-semibold" style="color: black;">Precio:</label>
                <input type="text" id="juego_precio" name="juego_precio" class="form-control"
                    value="<?= old('juego_precio', $producto['juego_precio']) ?>">
            </div>

            <div class="form-group mb-3 text-start">
                <label for="juego_imagen" class="form-label fw-semibold" style="color: black;">Imagen:</label>
                <input type="file" id="juego_imagen" name="juego_imagen" class="form-control">
                <?php if (!empty($producto['juego_imagen'])): ?>
                <img src="<?= base_url('assets/uploads/' . $producto['juego_imagen']) ?>" alt="Imagen actual"
                    width="100" class="mt-2">
                <?php endif; ?>
            </div>

            <div class="form-group mb-3 text-start">
                <label for="categoria_id" class="form-label fw-semibold" style="color: black;">Categoría:</label>
                <select id="categoria_id" name="categoria_id" class="form-control">
                    <option value="">Selecciona una categoría</option>
                    <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['categoria_id'] ?>"
                        <?= old('categoria_id', $producto['categoria_id']) == $categoria['categoria_id'] ? 'selected' : '' ?>>
                        <?= esc($categoria['categoria_descripcion']) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group mb-4 text-start">
                <label for="juego_estado" class="form-label fw-semibold" style="color: black;">Estado:</label>
                <select id="juego_estado" name="juego_estado" class="form-control">
                    <option value="1" <?= old('juego_estado', $producto['juego_estado']) == '1' ? 'selected' : '' ?>>
                        Activo</option>
                    <option value="0" <?= old('juego_estado', $producto['juego_estado']) == '0' ? 'selected' : '' ?>>
                        Inactivo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100 fw-bold">Actualizar Producto</button>
        </form>
    </div>
</div>