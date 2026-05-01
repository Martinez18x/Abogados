<?= $this->extend('Plantilla') ?>
<?= $this->section('content') ?>
<form method="post" action="<?=
                            base_url('/index.php/alumno/guardar') ?>">
    <div class="mb-3">
        <label for="nombre" class="formlabel">Nombre</label>
        <input type="text" class="form-control"
            name="nombre" placeholder="Nombre">
    </div>
    <div class="mb-3">
        <label for="apellido" class="formlabel">Apellido</label>
        <input type="text" class="form-control"
            name="apellido" placeholder="Apellido">
    </div>
    <div class="mb-3">
        <label for="carnet" class="formlabel">Carnet</label>
        <input type="text" class="form-control"
            name="carnet" placeholder="Carnet">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-success"
            value="Guardar">
    </div>
</form>
<?= $this->endSection() ?>