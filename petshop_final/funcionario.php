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
        require_once "configs/utils.php";
        require_once "model/Funcionario.php";
        require_once "configs/bootstrap.php";
        require_once "navBar.php";
        require_once "checagem.php";
        require_once "footer.php";
    ?>
    <div class="row">
        <div class="col-md-4">
            <h1>Cadastro do funcionário</h1>
            <form method = "POST">
                <p>Digite seu nome</p>
                <input type="text" name="nomeFuncionario" id="nomeFuncionario" class="form-control">
                <p>Digite seu email</p>
                <input type="email" name="emailFuncionario" id="emailFuncionario" class="form-control">
                <br><br>
                <button class="btn btn-primary">Cadastrar funcionário</button>
            </form>
        </div>

        <div class="col-md-7">
            <h2>Tabela de funcionário cadastrados</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id do funcionário</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $lista = Funcionario::listarFuncionarios();
                    foreach ($lista as $funcionario) {
                        echo "<tr>";
                        echo "<td>" . $funcionario["id"] . "</td>";
                        echo "<td>" . $funcionario["nome"] . "</td>";
                        echo "<td>" . $funcionario["email"] . "</td>";
                        echo "<td>" . $funcionario["datacadastro"] . "</td>";
                        $id = $funcionario["id"];
                        echo "<td>
                            <a href='./edicao/editarFuncionario.php?id=$id' class='btn btn-warning'>Editar</a> | 
                            <a href='funcionario.php?deletarFuncionario=$id' class='btn btn-danger'>Deletar</a>
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