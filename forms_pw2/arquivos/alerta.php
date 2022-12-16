<?php
    function alerta($opc, $err){
        switch ($opc) {
            case "1":
                if ($err === 1){
                    echo "<div class='alert alert-danger'><strong>Nome</strong> está vazio.</div>";
                }
                elseif($err === 2){
                    echo "<div class='alert alert-info'><strong>Nome</strong> deve conter pelo menos 4 caracteres.</div>";
                }
                elseif($err === 3){
                    echo "<div class='alert alert-info'><strong>Nome</strong> deve conter menos de 10 caracteres.</div>";
                }
                break;

            case "2":
                if ($err === 1){
                    echo "<div class='alert alert-danger'><strong>Idade</strong> está vazia.</div>";
                }
                elseif ($err === 2){
                    echo "<div class='alert alert-danger'><strong>Idade</strong> inválida, apenas aceitamos pessoas de 18 a 60 anos.</div>";
                }
                break;

            case "3":
                if ($err === 1){
                    echo "<div class='alert alert-danger'><strong>Email</strong> está vazio.</div>";
                }
                elseif ($err === 2){
                    echo "<div class='alert alert-danger'><strong>Email</strong> inválido.</div>";
                }
                break;

            case "4":
                if ($err === 1){
                    echo "<div class='alert alert-info'><strong>Estado Civil</strong> não pode ficar vazio.</div>";
                }
                else{
                    echo "<div class='alert alert-danger'><strong>Estado Civil</strong> selecionado não é válido.</div>";
                }
                break;

            case "5":
                if ($err === 1){
                    echo "<div class='alert alert-info'>Você deve selecionar exatamente <strong>3 comidas</strong></div>";
                }
                elseif ($err === 2){
                    echo "<div class='alert alert-info'>Uma ou mais <strong>comidas</strong> selecionadas são invalidas.</div>";
                }
                break;

            case "6":
                if ($err === 1){
                    echo "<div class='alert alert-danger'><strong>Forma de envio</strong> deve ser selecionada.</div>";
                }
                elseif ($err === 2){
                    echo "<div class='alert alert-danger'><strong>Forma de envio</strong> inválida</div>";
                }
                break;
            
            default:
                echo "<div class='alert alert-danger'><strong>Opção de alerta inválida</strong></div>";
                break;
        }
    }
?>