<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $titulo ?></title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/estilo_comercio.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo_terminoyusos.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo_QuienesSomos.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo_contacto.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo_footer.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo_header.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo_nav.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/estiloCarrusel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/estiloFondoPagina.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/estiloTarjetas.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/estiloLetraHome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/cartelPromocion.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/infoContecto.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/estiloProductos.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/menuCategorias.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo_inicio.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo_crearcuenta.css') ?>">
</head>

<body>
    <header>
        <div class="header-container container d-flex flex-wrap align-items-center justify-content-between gap-3">

            <div class="logo d-flex align-items-center gap-2">
                <a href="<?= base_url('/'); ?>">
                    <img src="<?= base_url('assets/img/logo.png') ?>" class="img-thumbnail" width="70" height="70"
                        alt="Logo de la compañía">
                </a>
                <h2 class="nombre-empresa1">CODI GAMES</h2>
            </div>

            <form class="d-flex flex-grow-1 justify-content-center my-2" role="search">
                <input class="form-control w-100" style="max-width: 600px;" type="search" placeholder="Buscar juegos..."
                    aria-label="Buscar">
            </form>

            <div class="acciones d-flex align-items-center gap-3">
                <?php
                    $perfil_id = session()->get('perfil_id');
                    $isCliente = ($perfil_id == 2);
                    $isInvitado = !session()->get('isLoggedIn');
                ?>

                <?php if ($isCliente || $isInvitado): ?>
                <a class="carro-de-compras" href="<?= base_url('ver_carrito'); ?>">
                    <i class="fas fa-cart-shopping"></i></a>
                <?php endif; ?>

                <?php if (session()->get('isLoggedIn')): ?>
                <span class="fw-bold"
                    style="font-size: 1.1rem; color: white; background-color: transparent; padding: 4px 10px;">
                    <?= esc(session()->get('cliente_nombre')) ?>
                </span>

                <a class="usuario" href="<?= base_url('cliente/cerrarSesion'); ?>">
                    <i class="fas fa-sign-out-alt" title="Cerrar sesión"></i>
                </a>
                <?php else: ?>
                <a class="usuario" href="<?= base_url('inicio'); ?>">
                    <i class="fas fa-circle-user" title="Iniciar sesión"></i>
                </a>
                <?php endif; ?>
            </div>

        </div>
    </header>
</body>

</html>