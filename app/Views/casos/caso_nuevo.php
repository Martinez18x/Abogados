<?= $this->extend('Plantilla') ?>
<?= $this->section('content') ?>
<form method="post" action="<?= base_url('/index.php/casos/guardar') ?>">
    <div class="mb-3">
        <label for="nombre" class="formlabel">Nombres</label>
        <input type="text" class="form-control"
            name="nombres" placeholder="Nombres">
    </div>
    <div class="mb-3">
        <label for="apellido" class="formlabel">Apellidos</label>
        <input type="text" class="form-control"
            name="apellidos" placeholder="Apellidos">
    </div>

    <div class="mb-3">
        <label for="carnet" class="formlabel">Dui</label>
        <input type="text" class="form-control"
            name="dui" placeholder="Dui">
    </div>

    <div class="mb-3">
        <input type="submit" class="btn btn-success"
            value="Guardar">
</form>
<?= $this->endSection() ?>