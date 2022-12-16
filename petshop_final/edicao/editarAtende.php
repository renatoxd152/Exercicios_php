<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PetShop</title>
</head>
<body>
    <a href="../consulta.php" class="btn btn-primary">Voltar</a>

    <?php
        require_once __DIR__ . "/../configs/utils.php";
        require_once __DIR__ . "/../model/Atende.php";
        require_once __DIR__ . "/../model/Funcionario.php";
        require_once __DIR__ . "/../model/Animal.php";
        require_once __DIR__ . "/../configs/bootstrap.php";

        $consulta = null;

        if(isMetodo("POST"))
        {
            if(parametrosValidos($_POST, ["funcionario","animal"]))
            {
                $resultado = Atende::editarConsulta($_POST["funcionario"],$_POST["animal"],$_POST["id"]);
                if ($resultado) {
                    echo "<h1 class='text-center'>Consulta editada com sucesso!</h1>";
                    die;
                } else {
                    echo "<h1 class='text-center'>Erro ao editar a consulta!</h1>";
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
                if (Atende::existeidConsulta($id)) {
                    $consulta = Atende::getConsultaById($id);
                } else {
                    echo "<h1 class='text-center'>Essa consulta não existe</h1>";
                    die;
                }
            } else {
                echo "<h1 class='text-center'>Você deve dizer qual é a consulta a ser editada</h1>";
                die;
            }
        }
    ?>

    <form method = "POST">
        <input type="hidden" name="id" value="<?= $consulta["id"] ?>" class="form-control">
        <p>Selecione um funcionário para a consulta</p>
        <select name="funcionario" class="form-select">
            <?php
            $lista = Funcionario::listarFuncionarios();
            foreach($lista as $funcionario)
            {
                ?>
                <option value="<?php echo $funcionario["id"]?>"><?php echo $funcionario["nome"]?></option>
                <?php
            }
            ?>
        </select>
        <p>Selecione um animal para a consulta</p>
        <select name="animal" class="form-select">
        <?php
            $lista = Animal::listarAnimais();
            foreach($lista as $animal)
            {
                ?>
                <option value="<?php echo $animal["id"]?>"><?php echo $animal["nome"]?></option>
                <?php
            }
        ?>
        </select>
        <br>

        <button class="btn btn-primary">Cadastrar consulta</button>
    </form>
</body>
</html>