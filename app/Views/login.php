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

<section class="login-container d-flex">
    <div class="container-fluid">
        <div class="row">

            <!-- FORMULARIO -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">

                <div class="card shadow-lg p-4 login-card border-0">

                    <!-- LOGO -->
                    <div class="text-center mb-4">
                        <i class="fas fa-user-shield fa-2x text-primary"></i>
                        <h2 class="fw-bold mt-2">Mi Sistema</h2>
                    </div>

                    <!-- FORM -->
                    <form method="post" action="<?= base_url('/login') ?>">

                        <h4 class="text-center mb-4">Iniciar Sesión</h4>

                        <!-- EMAIL -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input 
                                type="email" 
                                name="email"
                                id="email" 
                                class="form-control" 
                                placeholder="ejemplo@correo.com" 
                                required
                            >
                        </div>

                        <!-- PASSWORD -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input 
                                type="password" 
                                name="password"
                                id="password" 
                                class="form-control" 
                                placeholder="••••••••" 
                                required
                            >
                        </div>

                        <!-- BOTÓN -->
                        <div class="d-grid mb-3">
                            <button class="btn btn-primary btn-lg" type="submit">
                                <i class="fas fa-sign-in-alt me-2"></i> Entrar
                            </button>
                        </div>

                        <!-- LINKS -->
                        <div class="text-center">
                            <a href="#" class="d-block small mb-2">¿Olvidaste tu contraseña?</a>
                            <span class="small">
                                ¿No tienes cuenta? 
                                <a href="#" class="text-decoration-none fw-bold">Regístrate</a>
                            </span>
                        </div>

                    </form>
                </div>
            </div>

            <!-- IMAGEN -->
            <div class="col-md-6 d-none d-md-block p-0">
                <img 
                    src="data:image/jpeg;base64,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"
                    class="w-100 login-image"
                    alt="Imagen login"
                >
            </div>

        </div>
    </div>
</section>

</body>
</html>