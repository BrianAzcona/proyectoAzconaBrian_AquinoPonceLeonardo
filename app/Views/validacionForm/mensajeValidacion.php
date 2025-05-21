<!DOCTYPE html>
<html>

<head>
    <title>Formulario de Mensaje</title>
</head>

<body>

    <?= validation_list_errors() ?>

    <?= form_open('mensaje') ?>

    <h5>Apellido</h5>
    <input type="text" name="apellido" value="<?= set_value('apellido') ?>" size="50">

    <h5>Nombre</h5>
    <input type="text" name="nombre" value="<?= set_value('nombre') ?>" size="50">

    <h5>Correo Electrónico</h5>
    <input type="email" name="correo" value="<?= set_value('correo') ?>" size="50">

    <h5>Asunto</h5>
    <input type="text" name="asunto" value="<?= set_value('asunto') ?>" size="50">

    <h5>Número de Orden</h5>
    <input type="text" name="num_orden" value="<?= set_value('num_orden') ?>" size="50">

    <h5>Plataforma</h5>
    <input type="text" name="plataforma" value="<?= set_value('plataforma') ?>" size="50">

    <h5>Consulta</h5>
    <textarea name="consulta" rows="4" cols="52"><?= set_value('consulta') ?></textarea>

    <div style="margin-top: 20px;">
        <input type="submit" value="Enviar Mensaje">
    </div>

    <?= form_close() ?>

</body>

</html>