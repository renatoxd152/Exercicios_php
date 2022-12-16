<?php
    if(isset($_POST["nome"]) and !empty($_POST["nome"]))
    {
        $nome = $_POST["nome"];
        if(strlen($nome) < 4)
        {
            alerta(1, 2);
        }
        else if(strlen($nome) > 10)
        {
            alerta(1, 3);
        }
        else
        {
            imprime(1, $nome);
        }
    }
    else
    {
        alerta(1, 1);
    } 

    if(isset($_POST["idade"]) and !empty($_POST["idade"]))
    {
        $idade = $_POST["idade"];
        if($idade >= 18 and $idade <= 60)
        {
            imprime(2, $idade);
        }
        else if($idade < 18 or $idade > 60)
        {
            alerta(2, 2);
        }
    }
    else
    {
        alerta(2, 1);
    }
    

    if(isset($_POST["email"]) and !empty($_POST["email"]))
    {
        $nome = $_POST["email"];
        $ponto = ".";
        $caractere = "@";
        if((strpos($nome,$caractere)))
        {
            $email = explode("@", $nome);
                if (strpos($email[1], $ponto)){
                    imprime(3, $nome);    
                }
                else{
                    alerta(3, 2);
                }
        }
        else
        {
            alerta(3, 2);
        }
    }
    else
    {
        alerta(3, 1);
    }

    if(isset($_POST["estadocivil"]))
    {
        $estado = $_POST["estadocivil"];
        if ($estado == 0 or $estado == 1 or $estado == 2){
            
            imprime(4, $estado);
        }
        else{
            alerta(4, 2);
        }
    }
    else{
        alerta(4, 1);
    }
    

    if (isset($_POST["comida"]) and !empty($_POST["comida"]))
    {
        $comidas = $_POST["comida"];
        if (count($comidas) === 3){
            if (($comidas[0] < 0 or $comidas[0] > 5) or ($comidas[1] < 0 or $comidas[1] > 5) or ($comidas[2] < 0 or $comidas[2] > 5)){
                alerta(5, 3);
            }
            else{
                $comida;
                for($i = 0; $i < 3; $i++){
                    switch ($comidas[$i]){
                        case "0":
                            $comida[$i] = "peito de frango";
                            break;

                        case "1":
                            $comida[$i] = "bife de alcatra";
                            break;

                        case "2":
                            $comida[$i] = "arroz";
                            break;

                        case "3":
                            $comida[$i] = "batata frita";
                            break;

                        case "4":
                            $comida[$i] = "purê de batata";
                            break;
                        
                        case "5":
                            $comida[$i] = "salada verde";
                            break;
                        
                        default:
                            alerta(5);
                            break;
                    }
                }
                imprime(5, $comida);
            }
        }
        else{
            alerta(5, 1);
        }
    }
    else
    {
        alerta(5, 1);
    }
    
    if(isset($_POST["entrega"]))
    {
        $forma = $_POST["entrega"];
        switch ($forma){
            case 0:
                imprime(6, "entrega");
                break;
            case 1:
                imprime(6, "buscar");
                break;
            default:
                alerta(6, 2);
                break;
        } 
    }
    else
    {
        alerta(6, 1);
    }
?>