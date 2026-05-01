<?= $this->extend('Plantilla') ?>
<?= $this->section('content') ?>
<form method="post" action="<?=base_url('/index.php/abogado/guardar') ?>">
    <div class="mb-3">
        <label for="nombre" class="formlabel">Nombres</label>
        <input type="text" class="form-control"
            name="nombres" placeholder="Nombre">
    </div>
    <div class="mb-3">
        <label for="apellido" class="formlabel">Apellidos</label>
        <input type="text" class="form-control"
            name="apellidos" placeholder="Apellido">
    </div>
    <div class="mb-3">
        <label for="carnet" class="formlabel">Correo</label>
        <input type="text" class="form-control"
            name="correo" placeholder="Correo">
    </div>

    <div class="mb-3">
        <label for="carnet" class="formlabel">Contraseña</label>
        <input type="text" class="form-control"
            name="contraseña" placeholder="Contraseña">
    </div>

    <div class="mb-3">
        <label for="carnet" class="formlabel">Telefono</label>
        <input type="text" class="form-control"
            name="celular" placeholder="Telefono">
    </div>

    <div class="mb-3">
        <label for="carnet" class="formlabel">Especialidad</label>
        <input type="text" class="form-control"
            name="especialidad" placeholder="Especialidad">
    </div>

    <div class="mb-3">
        <input type="submit" class="btn btn-success"
            value="Guardar">
    </div>
</form>
<?= $this->endSection() ?>