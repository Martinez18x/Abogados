<?= $this->extend('Plantilla') ?>

<?= $this->section('content') ?>
<div class="container-fluid px-0 d-flex justify-content-between align-items-center">
    <span class="fs-4 fw-bold text-dark">Tabla de Casos</span>
    <a href="<?= base_url('/index.php/casos/iron') ?>" class="btn btn-primary btn-lg shadow-sm d-inline-flex align-items-center gap-2">
        <i class="bi bi-plus-lg"></i> Nuevo Caso
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
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">TITULO</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">DESCRIPCION</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">ESTADO</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">FECHA_INICIO</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">FECHA_FIN</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">ID_CLIENTE</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($todos as $data) : ?>
                    <tr>
                        <td class="py-3 px-4 fw-semibold"><?= $data['id_caso'] ?></td>
                        <td class="py-3 px-4 fw-semibold"><?= $data['titulo'] ?></td>
                        <td class="py-3 px-4"><?= $data['descripcion'] ?></td>
                        <td class="py-3 px-4 font-monospace"><?= $data['estado'] ?></td>
                        <td class="py-3 px-4 font-monospace"><?= $data['fecha_inicio'] ?></td>
                        <td class="py-3 px-4 font-monospace"><?= $data['fecha_fin'] ?></td>
                        <td class="py-3 px-4 font-monospace"><?= $data['id_cliente'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>