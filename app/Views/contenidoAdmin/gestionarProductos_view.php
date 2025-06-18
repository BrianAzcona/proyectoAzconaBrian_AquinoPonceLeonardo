<div class="container py-4">
    <div class="bg-gradient bg-info text-white py-3 px-4 rounded shadow text-center mb-4">
        <h2 class="m-0 fw-semibold">Gestión de Productos</h2>
    </div>
    <form method="get" class="mb-4">
        <div class="row g-2">
            <div class="col-md-5">
                <input type="text" name="nombre" class="form-control" placeholder="Buscar por nombre de juego"
                    value="<?= isset($_GET['nombre']) ? esc($_GET['nombre']) : '' ?>">
            </div>
            <div class="col-md-4">
                <input type="text" name="genero" class="form-control" placeholder="Buscar por género"
                    value="<?= isset($_GET['genero']) ? esc($_GET['genero']) : '' ?>">
            </div>
            <div class="col-md-2 d-flex gap-2">
                <button class="btn btn-primary flex-fill" type="submit" style="white-space: nowrap;">Buscar</button>
                <a href="<?= base_url('listarJuegos') ?>" class="btn btn-danger flex-fill"
                    style="white-space: nowrap;">Mostrar Todos</a>
            </div>
        </div>
    </form>
    <a href="<?= base_url('registrarProducto') ?>" class="btn btn-success mb-3">Agregar Nuevo Producto</a>
    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Plataforma</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; 
            $nombreFiltro = isset($_GET['nombre']) ? strtolower(trim($_GET['nombre'])) : '';
            $generoFiltro = isset($_GET['genero']) ? strtolower(trim($_GET['genero'])) : '';
            ?>
            <?php foreach ($productos as $producto): ?>
            <?php
                $nombreJuego = strtolower($producto['juego_nombre']);
                $categoriaJuego = strtolower($producto['categoria_descripcion']);

                if ( ($nombreFiltro && strpos($nombreJuego, $nombreFiltro) === false) ||
                    ($generoFiltro && strpos($categoriaJuego, $generoFiltro) === false)) {
                        continue;
                }
            ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><img src="<?= base_url('assets/uploads/' . $producto['juego_imagen']) ?>" width="60" alt="imagen">
                </td>
                <td><?= esc($producto['juego_nombre']) ?></td>
                <td><?= esc($producto['juego_plataforma']) ?></td>
                <td style="max-width: 200px; white-space: normal; word-wrap: break-word;">
                    <?= esc($producto['juego_descripcion']) ?>
                </td>
                <td><?= esc($producto['categoria_descripcion']) ?></td>
                <td>$<?= esc($producto['juego_precio']) ?></td>
                <td><?= esc($producto['juego_stock']) ?></td>
                <td>
                    <span class="badge bg-<?= $producto['juego_estado'] ? 'success' : 'danger' ?>">
                        <?= $producto['juego_estado'] ? 'Activo' : 'Inactivo' ?>
                    </span>
                </td>
                <td>
                    <a href="<?= base_url('productos/editar/' . $producto['juego_id']) ?>"
                        class="btn btn-sm btn-primary">Editar</a>
                    <a href="<?= base_url('eliminarJuego/' . $producto['juego_id']) ?>"
                        class="btn btn-sm btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>