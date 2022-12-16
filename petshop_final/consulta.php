<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="dog.jpg">
    <title>PetShop</title>
</head>
<body>
    <?php
        require_once "configs/utils.php";
        require_once "model/Funcionario.php";
        require_once "model/Animal.php";
        require_once "model/Atende.php";
        require_once "configs/bootstrap.php";
        require_once "navBar.php";
        require_once "checagem.php";
        require_once "footer.php";
    ?>
    <div class="row">
        <div class="col-md-4">
            <h1>Agendar consulta</h1>
            <form method = "POST">  
                <p>Selecione um funcionário para a consulta</p>
                <select name="funcionario" class="form-select">
                    <option value="">----</option>

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
                <option value="">----</option>

                <?php
                    $lista = Animal::listarAnimais();
                    foreach($lista as $animal)
                    {
                ?>
                        <option value="<?php echo $animal["id"]?>"><?php echo $animal["nome"]. " - Telefone: " . $animal['teldono']?></option>
                        <?php
                    }
                ?>
                </select>
                <br><br>

                <button class="btn btn-primary">Cadastrar consulta</button>
            </form>
        </div>

        <div class="col-md-7">
            <h2>Tabela de consultas agendadas</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id da consulta</th>
                        <th>Id do funcionário</th>
                        <th>Id do animal</th>
                        <th>Data de cadastro</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $lista = Atende::listarConsultas();
                    foreach ($lista as $consulta) {
                        echo "<tr>";
                        echo "<td>" . $consulta["id"] . "</td>";
                        $resultado1 = Funcionario::nomeFuncionario($consulta['idfuncionario']);
                        foreach($resultado1 as $funcionario)
                        {
                            echo "<td>".$funcionario['id']." - ".$funcionario['nome']."</td>";
                        }
                        $resultado2 = Animal::nomeAnimal($consulta['idanimal']);
                        foreach($resultado2 as $animal)
                        {
                            echo "<td>".$animal['id']." - ".$animal['nome']."</td>";
                        }
                        echo "<td>" . $consulta["data"] . "</td>";
                        $id = $consulta["id"];
                        echo "<td>
                            <a href='edicao/editarAtende.php?id=$id' class='btn btn-warning'>Editar</a> | 
                            <a href='consulta.php?deletarConsulta=$id' class='btn btn-danger'>Deletar</a>
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