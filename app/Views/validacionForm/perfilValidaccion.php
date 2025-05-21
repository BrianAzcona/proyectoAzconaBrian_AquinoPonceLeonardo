<!DOCTYPE html>
<html>

<head>
    <title>Formulario de Perfil</title>
</head>

<body>

    <?= validation_list_errors() ?>

    <?= form_open('perfil') ?>

    <h5>Descripción del Perfil</h5>
    <input type="text" name="perfil_descripcion" value="<?= set_value('perfil_descripcion') ?>" size="50">

    <div style="margin-top: 20px;">
        <input type="submit" value="Guardar Perfil">
    </div>

    <?= form_close() ?>

</body>

</html>