<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="card-body">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container-fluid">

            <a class="navbar-brand fw-bold" href="#">⚖️ Sistema Legal</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContenido">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/index.php/home/perfil') ?>">Perfiles</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"  href="<?= base_url('/index.php/home') ?>">Abogados</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Clientes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Casos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Caso_Abogado</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Bitácora</a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    <h2>
        <?= $this->renderSection('content') ?>
    </h2>



    <div class="container">
        <?= $this->renderSection('container') ?>

        <table border="2">
            <?= $this->renderSection('table') ?>
        </table>

    </div>

    <script>
        <?= $this->renderSection('script') ?>
    </script>

    <footer>
        <div><?= $this->renderSection('footer') ?></div>
    </footer>

</body>

</html>