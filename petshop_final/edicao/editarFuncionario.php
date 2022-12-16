<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PetShop</title>
</head>
<body>
    <a href="../funcionario.php" class="btn btn-primary">Voltar</a>

    <?php
        require_once __DIR__ . "/../configs/utils.php";
        require_once __DIR__ . "/../model/Funcionario.php";
        require_once __DIR__ . "/../configs/bootstrap.php";

        $funcionario = null;

        if(isMetodo("POST"))
        {
            if(parametrosValidos($_POST, ["id","nomeFuncionario", "emailFuncionario"]))
            {
                $resultado = Funcionario::editarFuncionario($_POST["id"],$_POST["nomeFuncionario"], $_POST["emailFuncionario"]);
                if ($resultado) {
                    echo "<h1 class='text-center'>Funcionário editado com sucesso!</h1>";
                    die;
                } else {
                    echo "<h1 class='text-center'>Erro ao editar o funcionário!</h1>";
                    die;
                }
            } else {
                echo "<h1 class='text-center'>Problemas na requisição de editar</h1>";
                die;
            }
        }

        if (isMetodo("GET")) {
            if (parametrosValidos($_GET, ["id"])) {
                $id = $_GET["id"];
                if (Funcionario::existeidFuncionario($id)) {
                    $funcionario = Funcionario::getFuncionarioById($id);
                } else {
                    echo "<h1 class='text-center'>Esta funcionário não existe</h1>";
                    die;
                }
            } else {
                echo "<h1 class='text-center'>Você deve dizer qual é a pessoa a ser editada</h1>";
                die;
            }
        }
    ?>

    <div>
        <h1>Editando as informações de <?= $funcionario["nome"] ?></h1>

        <form method = "POST">
            <p>Digite seu nome</p>
            <input type="text" name="nomeFuncionario" class="form-control" required>
            <p>Digite seu email</p>
            <input type="email" name="emailFuncionario" class="form-control" required>
            <input type="hidden" name="id" value="<?= $funcionario["id"] ?>">
            <br>

            <button class="btn btn-primary">Alterar dados do funcionário</button>
        </form>
    </div>
</body>
</html>