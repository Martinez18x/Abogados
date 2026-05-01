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