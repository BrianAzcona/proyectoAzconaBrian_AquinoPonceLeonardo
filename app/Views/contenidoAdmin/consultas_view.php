<div class="container py-4">
    <div class="bg-gradient bg-info text-white py-3 px-4 rounded shadow text-center mb-4">
        <h2 class="m-0 fw-semibold">Consultas de Clientes</h2>
    </div>
    <form method="get" class="mb-4">
        <div class="row g-2">
            <div class="col-md-10">
                <input type="text" name="correo" class="form-control" placeholder="Buscar por correo electrónico"
                    value="<?= isset($_GET['correo']) ? esc($_GET['correo']) : '' ?>">
            </div>
            <div class="col-md-2 d-flex gap-2">
                <button class="btn btn-primary flex-fill" type="submit" style="white-space: nowrap;">Buscar</button>
                <a href="<?= base_url('consultasAdministrador') ?>" class="btn btn-danger ">Mostrar Todos</a>
            </div>
        </div>
    </form>
    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Correo Electronico</th>
                <th>Asunto</th>
                <th>Num. de Orden</th>
                <th>Plataforma</th>
                <th>Accion</th>


            </tr>
        </thead>
        <tbody>
            <?php $i = 1; 
                $correoFiltro = isset($_GET['correo']) ? trim($_GET['correo']) : '';
            ?>
            <?php foreach ($consultas as $row): ?>
            <?php 
            if ($correoFiltro && stripos($row['correo'], $correoFiltro) === false) {
                    continue;
                }?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= esc($row['apellido']) ?></td>
                <td><?= esc($row['nombre']) ?></td>
                <td><?= esc($row['correo']) ?></td>
                <td><?= esc($row['asunto']) ?></td>
                <td><?= esc($row['num_orden']) ?></td>
                <td><?= esc($row['plataforma']) ?></td>
                <td>
                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                        data-bs-target="#modalConsulta<?= $i ?>">
                        Ver
                    </button>
                </td>

            </tr>
            <div class="modal fade" id="modalConsulta<?= $i ?>" tabindex="-1" aria-labelledby="modalLabel<?= $i ?>"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel<?= $i ?>">Detalle de la Consulta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Apellido:</strong> <?= esc($row['apellido']) ?></p>
                            <p><strong>Nombre:</strong> <?= esc($row['nombre']) ?></p>
                            <p><strong>Correo:</strong> <?= esc($row['correo']) ?></p>
                            <p><strong>Asunto:</strong> <?= esc($row['asunto']) ?></p>
                            <p><strong>Número de Orden:</strong> <?= esc($row['num_orden']) ?></p>
                            <p><strong>Plataforma:</strong> <?= esc($row['plataforma']) ?></p>
                            <p><strong>Consulta:</strong> <?= esc($row['consulta']) ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>