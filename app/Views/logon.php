<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- 🔷 NAVBAR -->
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
            <a href="<?= base_url('/index.php/home/login') ?>" class="btn btn-primary ms-lg-3">
                Iniciar Sesión
            </a>

        </div>
    </div>
</nav>

<!-- 🔷 CONTENIDO PRINCIPAL -->
<div class="container text-center mt-5">
    <h1>Bienvenido a LegalApp</h1>
    <p>Encuentra abogados y gestiona tus casos fácilmente.</p>
</div>

</body>
</html>