<?= $this->extend('Plantilla') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h2 class="mb-4 text-center fw-bold">Nuestros Abogados</h2>
    
    <div class="row">
        <?php foreach ($todos as $data) : ?>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <!-- Imagen genérica de perfil -->
                    <div class="text-center pt-4">
                        <img src="https://flaticon.com" width="100" alt="Perfil">
                    </div>
                    
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                            <?= $data['nombres'] . ' ' . $data['apellidos'] ?>
                        </h5>
                        <p class="badge bg-primary fs-6">
                            <?= $data['especialidad'] ?>
                        </p>
                        
                        <hr>
                        
                        <div class="text-start">
                            <p class="mb-1 text-muted">
                                <i class="bi bi-envelope-at me-2"></i><?= $data['correo'] ?>
                            </p>
                            <p class="mb-0 text-muted">
                                <i class="bi bi-telephone me-2"></i><?= $data['telefono'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>
