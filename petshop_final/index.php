<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PetShop</title>
    <link rel="shortcut icon" href="dog.jpg">
</head>
<body>
    <?php
        require_once "configs/utils.php";
        require_once "model/Funcionario.php";
        require_once "model/Animal.php";
        require_once "model/Atende.php";
        require_once "configs/bootstrap.php";
        require_once "navBar.php";
    ?>

    <h3>Listagens</h3>
    <div class="row">
        <div class="col-lg-3">
            <p>Listar animais de um determinado telefone</p>
            <form method="GET">
                <select name="animais_telefone" class="form-select">
                    <option value="">----</option>
                <?php
                $lista = Animal::listarNumeros();
                foreach($lista as $telefone)
                {
                    ?>
                    <option value="<?php echo $telefone['teldono']?>"><?php echo $telefone['teldono']?></option>
                    <?php
                }
                ?>
                </select>
                <br>

                <button class="btn btn-primary">Listar</button>
            </form>
        </div>

        <br><br>
        <div class="col-lg-3">
            <p>Listar funcionários que cuidam do animal</p>
            <form method="GET">
                <select name="animais_funcionario" class="form-select">
                    <option value="">----</option>
                    <?php
                    $lista = Animal::listarAnimais();
                    foreach($lista as $animal)
                    {
                        ?>
                        <option value="<?php echo $animal['id']?>"><?php echo $animal['nome'] . " - Telefone: " . $animal['teldono']?></option>
                        <?php
                    }
                    ?>
                </select>
                <br>

                <button class="btn btn-primary">Listar funcionários</button>
            </form>
        </div>

        <br><br>
        <div class="col-lg-3">
            <p>Listar animais de determinada raça</p>
            <form method="GET">
                <select name="animais_raca" class="form-select">
                    <option value="">----</option>
                    <?php
                    $lista = Animal::listarAnimais_distinct();
                    foreach($lista as $animal)
                    {
                        ?>
                        <option value="<?php echo $animal['raca']?>"><?php echo $animal['raca']?></option>
                        <?php
                    }
                    ?>
                </select>
                <br>

                <button class="btn btn-primary">Listar animais</button>
            </form>
        </div>

        <br><br>
        <div class="col-lg-3">
            <p>Listar animais cuidados por determinado funcionário</p>
            <form method="GET">
                <select name="funcionario_animal" class="form-select">
                    <option value="">----</option>
                    <?php
                    $lista = Funcionario::listarFuncionarios();
                    foreach($lista as $funcionario)
                    {
                        ?>
                        <option value="<?php echo $funcionario['id']?>"><?php echo $funcionario['email']?></option>
                        <?php
                    }
                    ?>
                </select>
                <br>

                <button class="btn btn-primary">Listar animais</button>
            </form>
        </div>
    </div>
    <br><br>
    <?php
        require_once "checagem.php";
        require_once "footer.php";
    ?>
</body>
</html>