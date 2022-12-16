<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PetShop</title>
</head>
<body>
    <a href="../animal.php" class="btn btn-primary">Voltar</a>
    <?php
        require_once __DIR__ . "/../configs/utils.php";
        require_once __DIR__ . "/../model/Animal.php";
        require_once __DIR__ . "/../configs/bootstrap.php";

        $animal = null;

        if(isMetodo("POST"))
        {
            if(parametrosValidos($_POST, ["id","nomeAnimal","raca","telefone"]))
            {
                $resultado = Animal::editarAnimal($_POST["id"],$_POST["nomeAnimal"], $_POST["raca"],$_POST["telefone"]);
                if ($resultado) {
                    echo "<h1 class='text-center'>Animal editado com sucesso!</h1>";
                    die;
                } else {
                    echo "<h1 class='text-center'>Erro ao editar o animal!</h1>";
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
                if (Animal::existeidAnimal($id)) {
                    $animal = Animal::getAnimalById($id);
                } else {
                    echo "<h1 class='text-center'>Esse animal não existe!</h1>";
                    die;
                }
            } else {
                echo "<h1 class='text-center'>Você deve dizer qual é o animal a ser editada</h1>";
                die;
            }
        }
    ?>

    <h1>Editando as informações de <?=$animal["nome"]?></h1>

    <form method = "POST">
        <p>Digite o nome do animal:</p>
        <input type="text" name="nomeAnimal" id="nomeAnimal" class="form-control">
        <p>Digite a raça do animal</p>
        <input type="text" name="raca" id="raca" class="form-control">
        <p>Digite o telefone do dono</p>
        <input type="text" name="telefone" id="telefone" class="form-control">
        <input type="hidden" name="id" value="<?= $animal["id"] ?>">
        <br>

        <button class="btn btn-primary">Cadastrar Animal</button>
    </form>
</body>
</html>