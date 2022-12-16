<?php
    function imprime($opc, $conteudo){
        switch ($opc) {
            case "1":
                echo "<div class='alert alert-success'>Nome <strong>$conteudo</strong> cadastrado com sucesso.</div>";
                break;

            case "2":
                echo "<div class='alert alert-success'>Idade válida.</div>";
                break;
            
            case "3":
                echo "<div class='alert alert-success'>Email <strong>$conteudo</strong> é válido.</div>";
                break;
            
            case "4":
                echo "<div class='alert alert-success'>Estado civil cadastrado com sucesso.</div>";
                break;

            case "5":
                echo "<div class='alert alert-success'>Comidas selecionadas: <strong>$conteudo[0]</strong>, <strong>$conteudo[1]</strong> e <strong>$conteudo[2]</strong></div>";
                break;

            case "6":
                echo "<div class='alert alert-success'>Sua forma de entrega será <strong>$conteudo</strong>.</div>";
                break;

            default:
                echo "Erro: uma das opções passadas não é valida.";
                break;
        }
    }
?>