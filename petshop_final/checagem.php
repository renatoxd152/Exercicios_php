<?php
    //require_once "configs/BancoDados.php";
    require_once "configs/utils.php";
    require_once "model/Funcionario.php";
    require_once "model/Animal.php";
    require_once "model/Atende.php";

    if (isMetodo("POST")) 
    {
        if (parametrosValidos($_POST, ["nomeFuncionario", "emailFuncionario"])) {
            $nome = $_POST["nomeFuncionario"];
            $email = $_POST["emailFuncionario"];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<div class='alert alert-warning alert-dismissable'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                echo "O email não é válido";
                echo "</div>";
            }
            else{
                if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
                    echo "<div class='alert alert-warning alert-dismissable'>";
                    echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                    echo "O nome possui caracteres invalidos";
                    echo "</div>";
                }
                else{
                    if (!Funcionario::existeEmail($email)) {
                        if (Funcionario::cadastrarFuncionario($nome, $email)) {
        
                            echo "<div class='alert alert-success alert-dismissable'>";
                            echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                            echo "O funcionário <b>$nome</b> foi cadastrada com sucesso!";
                            echo "</div>";
                        } else {
        
                            echo "<div class='alert alert-warning alert-dismissable'>";
                            echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                            echo "Erro ao cadastrar o funcionário <b>$nome</b>";
                            echo "</div>";
                        }
                    } else {
                        echo "<div class='alert alert-warning alert-dismissable'>";
                        echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                        echo "Já existe um funcionário com o email <b>$email</b>";
                        echo "</div>";
                    }
                }
            }

            
            
        }
    }

    if (isMetodo("POST")) 
    {
        if (parametrosValidos($_POST, ["nomeAnimal", "raca","telefone"])) 
        {
            $nomeAnimal = $_POST["nomeAnimal"];
            $raca = $_POST["raca"];
            $telefone = $_POST["telefone"];

            if(Animal::verificarAnimal_Telefone($nomeAnimal,$telefone))
            {
                echo "<div class='alert alert-warning alert-dismissable'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                echo "Já existe um animal com o nome: <b>$nomeAnimal</b> e telefone!";
                echo "</div>";
            }
            else
            {
                if (Animal::cadastrarAnimal($nomeAnimal,$raca,$telefone)) {
                    echo "<div class='alert alert-success alert-dismissable'>";
                    echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                    echo "O animal <b>$nomeAnimal</b> de raça <b>$raca</b> foi cadastrado com sucesso!";
                    echo "</div>";
                } else {
                    echo "<div class='alert alert-warning alert-dismissable'>";
                    echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                    echo "Erro ao cadastrar o animal <b>$nomeAnimal</b>";
                    echo "</div>";
                }
            }
            
        }      
    }
    


    if (isMetodo("GET")) {
        if (parametrosValidos($_GET, ["deletarFuncionario"])) {
            $id = $_GET["deletarFuncionario"];
            if (Funcionario::existeidFuncionario($id)) {
                if(Atende::selecionarFuncionario($id))
                {
                    echo "<div class='alert alert-warning alert-dismissable'>";
                    echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                    echo "Não é possível deletar esse funcionário pois está cadastrado em uma consulta!";
                    echo "</div>";
                }
                else
                {
                    $resultado = Funcionario::deletarFuncionario($id);
                    if ($resultado) {

                        echo "<div class='alert alert-success alert-dismissable'>";
                        echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                        echo "Funcionário deletado com sucesso!";
                        echo "</div>";
                    } else {

                        echo "<div class='alert alert-warning alert-dismissable'>";
                        echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                        echo "Não foi possível encontrar esse funcionário!";
                        echo "</div>";
                    }
                }
            } else {
                echo "<div class='alert alert-warning alert-dismissable'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                echo "Esse funcionário não existe!";
                echo "</div>";
                die;
            }
        }
    }

        
    if (isMetodo("GET")) {
        if (parametrosValidos($_GET, ["deletarAnimal"])) {
            $id = $_GET["deletarAnimal"];
            if (Animal::existeidAnimal($id)) {
                if(Atende::selecionarAnimaisID($id))
                {

                    echo "<div class='alert alert-warning alert-dismissable'>";
                    echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                    echo "Não é possível deletar esse animal pois está cadastrado em uma consulta!";
                    echo "</div>";
                }
                else
                {
                    $resultado = Animal::deletarAnimal($id);
                    if ($resultado) {
                        echo "<div class='alert alert-success alert-dismissable'>";
                        echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                        echo "Animal deletado com sucesso!";
                        echo "</div>";
                    } else {
                        echo "<div class='alert alert-warning alert-dismissable'>";
                        echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                        echo "Não foi possível encontrar esse animal!";
                        echo "</div>";
                    }
                }
            } else {
                echo "<div class='alert alert-warning alert-dismissable'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                echo "Esse animal não existe!";
                echo "</div>";
                die;
            }
        }
    }

    if(isMetodo("POST"))
    {
        if(parametrosValidos($_POST, ["funcionario","animal"]))
        {
            $funcionario = $_POST["funcionario"];
            $animal = $_POST["animal"];

            if(Atende::selecionarFuncionario($funcionario)and Atende::selecionarAnimaisID($animal))
            {
                echo "<div class='alert alert-warning alert-dismissable'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                echo "Não foi possivel cadastrar a consulta";
                echo "</div>";
            }  
            else
            {
                if(Atende::cadastrarConsulta($funcionario,$animal))
                {
                    echo "<div class='alert alert-success alert-dismissable'>";
                    echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                    echo "A consulta foi cadastrada com sucesso";
                    echo "</div>";
                }
                else
                {
                    echo "<div class='alert alert-warning alert-dismissable'>";
                    echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                    echo "Erro ao cadastrar a consulta!";
                    echo "</div>";
                    die;
                }
            }
    
        }
    }

    if (isMetodo("GET")) {
        if (parametrosValidos($_GET, ["deletarConsulta"])) {
            $id = $_GET["deletarConsulta"];
            if (Atende::existeidConsulta($id)) {
                $resultado = Atende::deletarConsulta($id);
                if ($resultado) {
                    echo "<div class='alert alert-success alert-dismissable'>";
                    echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                    echo "A consulta foi deletada com sucesso!";
                    echo "</div>";
                } else {
                    echo "<div class='alert alert-warning alert-dismissable'>";
                    echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                    echo "Não foi possível encontrar essa consulta!";
                    echo "</div>";
                }
            } else {
                echo "<div class='alert alert-warning alert-dismissable'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                echo "Essa consulta não existe!";
                echo "</div>";
                die;
            }
        }
    }

    if (isMetodo("GET")) 
    {
        if (parametrosValidos($_GET, ["animais_telefone"])) 
        {
            $telefone = $_GET["animais_telefone"];
            $resultado = Animal::listarAnimais_telefone($telefone);
            if($resultado)
            {
                echo "Animais cadastrados no telefone $telefone";
                echo "<ul>";
                foreach($resultado as $animal)
                {
                    echo "<li>".$animal["nome"]."</li>";
                }
                echo "</ul>";
            }
            else
            {
                echo "<div class='alert alert-warning alert-dismissable'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                echo "Houve um erro ao listar os animais!";
                echo "</div>";
            }                
        }
    }

    if (isMetodo("GET")) 
    {
        if (parametrosValidos($_GET, ["animais_funcionario"])) 
        {
            $id = $_GET["animais_funcionario"];
            $resultado = Atende::selecionarFuncionariosbyID($id);
            if($resultado)
            {
                echo "Funcionários que cuidam desse animal";
                echo "<ul>";
                foreach($resultado as $idfuncionario)
                {
                    $resultado2 = Funcionario::listarFuncionariosbyId($idfuncionario["idfuncionario"]);
                    foreach($resultado2 as $funcionarios)
                    {
                        echo "<li>".$funcionarios['nome']."</li>";
                    }
                }
                echo "</ul>";
            }
            else{
                echo "<div class='alert alert-warning alert-dismissable'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                echo "Houve um erro ao listar os funcionarios!";
                echo "</div>";
            }
        }
    }

    if (isMetodo("GET")) 
    {
        if (parametrosValidos($_GET, ["animais_raca"])) 
        {
            $raca = $_GET["animais_raca"];
            $resultado = Animal::listarAnimais_raca($raca);
            if($resultado)
            {
                echo "Animais existentes da raça $raca";
                echo "<ul>";
                foreach($resultado as $animais)
                {
                    echo "<li>".$animais['nome'] ." - Telefone: ". $animais['teldono'] ."</li>";
                }
                echo "</ul>";
            }
            else
            {
                echo "<div class='alert alert-warning alert-dismissable'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                echo "Houve um erro ao listar os animais!";
                echo "</div>";
            }
        }
    }

    if (isMetodo("GET")) 
    {
        if (parametrosValidos($_GET, ["funcionario_animal"])) 
        {
            $id = $_GET["funcionario_animal"];
            $resultado = Atende::selecionarAnimais($id);
            if($resultado)
            {
                echo "Animais cuidados por esse funcionário!";
                echo "<ul>";
                foreach($resultado as $funcionario)
                {
                    $resultado2 = Animal::listarAnimaisbyID($funcionario['idanimal']);
                    foreach($resultado2 as $animais)
                    {
                        echo "<li>".$animais['nome']."</li>";
                    }
                }
                echo "</ul>";
            }
            else
            {
                echo "<div class='alert alert-warning alert-dismissable'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>";
                echo "Houve um erro ao listar os animais!";
                echo "</div>";
            }
        }
    }