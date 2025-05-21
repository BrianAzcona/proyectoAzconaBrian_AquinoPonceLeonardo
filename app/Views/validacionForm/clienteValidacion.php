<!DOCTYPE html>
<html>

<head>
    <title>Formulario de Cliente</title>
</head>

<body>

    <?= validation_list_errors() ?>

    <?= form_open('cliente') ?>

    <h5>Nombre</h5>
    <input type="text" name="cliente_nombre" value="<?= set_value('cliente_nombre') ?>" size="50">

    <h5>Apellido</h5>
    <input type="text" name="cliente_apellido" value="<?= set_value('cliente_apellido') ?>" size="50">

    <h5>DNI</h5>
    <input type="text" name="cliente_dni" value="<?= set_value('cliente_dni') ?>" size="50">

    <h5>Correo Electrónico</h5>
    <input type="email" name="cliente_correo" value="<?= set_value('cliente_correo') ?>" size="50">

    <h5>Contraseña</h5>
    <input type="password" name="cliente_password" value="<?= set_value('cliente_password') ?>" size="50">

    <h5>Teléfono</h5>
    <input type="text" name="cliente_telefono" value="<?= set_value('cliente_telefono') ?>" size="50">

    <h5>País</h5>
    <input type="text" name="cliente_pais" value="<?= set_value('cliente_pais') ?>" size="50">

    <h5>Provincia</h5>
    <input type="text" name="cliente_provincia" value="<?= set_value('cliente_provincia') ?>" size="50">

    <h5>Ciudad</h5>
    <input type="text" name="cliente_ciudad" value="<?= set_value('cliente_ciudad') ?>" size="50">

    <h5>ID de Perfil</h5>
    <input type="number" name="perfil_id" value="<?= set_value('perfil_id') ?>" size="50">

    <div style="margin-top: 20px;">
        <input type="submit" value="Guardar Cliente">
    </div>

    <?= form_close() ?>

</body>

</html>