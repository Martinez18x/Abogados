<?= $this->extend('Plantilla') ?>

<?= $this->section('content') ?>
<div class="container-fluid px-0 d-flex justify-content-between align-items-center">
    <span class="fs-4 fw-bold text-dark">Tabla de Abogados</span>
    <a href="<?= base_url('/index.php/abogado/nuevo') ?>" class="btn btn-primary btn-lg shadow-sm d-inline-flex align-items-center gap-2">
        <i class="bi bi-plus-lg"></i> Nuevo Abogado
    </a>
</div>
<?= $this->endSection() ?>

<?= $this->section('table') ?>
<div class="container-fluid px-0">
    <div class="table-responsive w-100">
        <!-- 'table-striped' añade filas alternas y 'table-hover' efecto al pasar el mouse -->
        <table class="table table-striped table-hover align-middle mb-0 w-100">
            <thead class="table-dark">
                <tr>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">ID</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">Nombres</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">Apellido</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">CORREO</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">CONTRASEÑA</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">TELFONO</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">ESPECIALIDAD</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">FECHA</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($todos as $data) : ?>
                    <tr>
                        <td class="py-3 px-4 fw-semibold"><?= $data['id_abogado'] ?></td>
                        <td class="py-3 px-4 fw-semibold"><?= $data['nombres'] ?></td>
                        <td class="py-3 px-4"><?= $data['apellidos'] ?></td>
                        <td class="py-3 px-4"><?= $data['correo'] ?></td>
                        <td class="py-3 px-4 font-monospace"><?= $data['contraseña'] ?></td>
                        <td class="py-3 px-4 font-monospace"><?= $data['telefono'] ?></td>
                        <td class="py-3 px-4 font-monospace"><?= $data['especialidad'] ?></td>
                        <td class="py-3 px-4 font-monospace"><?= $data['fecha_registro'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>