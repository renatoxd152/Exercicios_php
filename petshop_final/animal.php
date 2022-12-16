<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>
    <link rel="shortcut icon" href="dog.jpg">
</head>
<body>
    <?php
        require_once "configs/BancoDados.php";
        require_once "configs/utils.php";
        require_once "model/Animal.php";
        require_once "configs/bootstrap.php";
        require_once "navBar.php";
        require_once "checagem.php";
        require_once "footer.php";
    ?>
    <div class="row">
        <div class="col-md-4">
            <h1>Cadastro do animal</h1>

            <form method = "POST">
                <p>Digite o nome do animal</p>
                <input type="text" name="nomeAnimal" id="nomeAnimal" class="form-control">
                <p>Digite a raça do animal</p>
                <input type="text" name="raca" id="raca" class="form-control">
                <p>Digite o telefone do dono</p>
                <input type="text" name="telefone" id="telefone" class="form-control">
                <br><br>
                <button class="btn btn-primary">Cadastrar Animal</button>
            </form>
        </div>

        <div class="col-md-7">
            <h2>Tabela de animais cadastrados</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id do animal</th>
                        <th>Nome do animal</th>
                        <th>Raça</th>
                        <th>Telefone do dono</th>
                        <th>Data de cadastro</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $lista = Animal::listarAnimais();
                    foreach ($lista as $animal) {
                        echo "<tr>";
                        echo "<td>" . $animal["id"] . "</td>";
                        echo "<td>" . $animal["nome"] . "</td>";
                        echo "<td>" . $animal["raca"] . "</td>";
                        echo "<td>" . $animal["teldono"] . "</td>";
                        echo "<td>" . $animal["datacadastro"] . "</td>";
                        $id = $animal["id"];
                        echo "<td>
                            <a href='edicao/editarAnimal.php?id=$id' class='btn btn-warning'>Editar</a> | 
                            <a href='animal.php?deletarAnimal=$id' class='btn btn-danger'>Deletar</a>
                        </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>