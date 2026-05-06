<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>

    <!-- SOLO una versión de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Iconos (FontAwesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            min-height: 100vh;
        }

        .login-card {
            max-width: 420px;
            width: 100%;
            border-radius: 20px;
        }

        .login-image {
            object-fit: cover;
            height: 100vh;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <!-- LOGO -->
            <a class="navbar-brand" href="#">LegalApp</a>

            <!-- BOTÓN RESPONSIVE -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- MENÚ -->
            <div class="collapse navbar-collapse" id="menu">

                <!-- 4 CAMPOS -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/index.php/home/index') ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/index.php/home/perfil') ?>">Abogados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>

                <!-- BOTÓN LOGIN -->
                <a href="index.php/home/login" class="btn btn-primary ms-lg-3">
                    Iniciar Sesión
                </a>

            </div>
        </div>
    </nav>

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

</body>