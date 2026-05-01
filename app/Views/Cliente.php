<?= $this->extend('Plantilla') ?>

<?= $this->section('content') ?>
<div class="container-fluid px-0 d-flex justify-content-between align-items-center">
    <span class="fs-4 fw-bold text-dark">Tabla de Clientes</span>
    <a href="<?= base_url('/index.php/cliente/nuevo') ?>" class="btn btn-primary btn-lg shadow-sm d-inline-flex align-items-center gap-2">
        <i class="bi bi-plus-lg"></i> Nuevo Cliente
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
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">DUI</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">TELFONO</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">DIRECCION</th>
                    <th class="py-3 px-4 text-uppercase fs-7 fw-bold">CORREO</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($todos as $data) : ?>
                    <tr>
                        <td class="py-3 px-4 fw-semibold"><?= $data['id_cliente'] ?></td>
                        <td class="py-3 px-4 fw-semibold"><?= $data['nombre'] ?></td>
                        <td class="py-3 px-4"><?= $data['apellido'] ?></td>
                        <td class="py-3 px-4 font-monospace"><?= $data['dui'] ?></td>
                        <td class="py-3 px-4 font-monospace"><?= $data['telefono'] ?></td>
                        <td class="py-3 px-4 font-monospace"><?= $data['direccion'] ?></td>
                        <td class="py-3 px-4 font-monospace"><?= $data['correo'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>