<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="row">
            <div class="col form">
                <?php
                    require_once "./arquivos/form.php"
                ?>
            </div>
            <div class="col">
                <p>Campo <strong>nome</strong> deve conter entre 4 e 10 caracteres.</p>
                <p>A <strong>idade</strong> deve ser entre 18 e 60.</p>
                <p>O <strong>email</strong> deve conter um '@' e um '.'.</p>
                <p>Devem ser selecionadas <strong>exatamente 3 comidas</strong>.</p>
                <p>Os campos <strong>Estado Civil</strong> e <strong>Entrega</strong> são obrigatórios.</p>
            </div>
            <div class="col">
                <?php
                    require "./arquivos/imprime.php";
                    require "./arquivos/alerta.php";
                    require "./arquivos/teste.php";
                ?>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</html>