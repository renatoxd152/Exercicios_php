<?php
    //Renato Porto Morillo-SC3014762
    if(isset($_FILES["arquivo"]) and !empty($_FILES["arquivo"]))
    {
        $contArquivos=0;
        $cont=0;
        $verifica=0;
        foreach(($_FILES["arquivo"]["tmp_name"]) as $chave => $valor)
        {
            $contArquivos++;
            $nomeArquivo = $_FILES["arquivo"]["name"][$chave];
            if(is_uploaded_file($_FILES["arquivo"]["tmp_name"][$chave]))
            {
                $minimoPDF = 10 * 1024;
                $maximoPDF = 1024 * 1024;
                if(strrchr(($_FILES["arquivo"]["name"][$chave]),'.') == ".pdf")
                {
                    if($_FILES["arquivo"]["size"][$chave]<$minimoPDF)
                    {
                        echo "<p>O arquivo $nomeArquivo é menor que o tamanho exigido!</p>";
                    }
                    else if($_FILES["arquivo"]["size"][$chave]>$maximoPDF)
                    {
                        echo "<p>O arquivo $nomeArquivo é maior que o tamanho máximo!</p>";
                    }
                    else
                    {
                        $cont++;
                    }
                }
                else if(strrchr(($_FILES["arquivo"]["name"][$chave]),'.') == ".jpeg" or strrchr(($_FILES["arquivo"]["name"][$chave]),'.') == ".png")
                {
                    $minimo = 500 * 1024;
                    if($_FILES["arquivo"]["size"][$chave]<$minimo)
                    {
                        echo "<p>O arquivo $nomeArquivo é menor que o tamanho exigido!</p>";
                    }
                    else
                    {
                        $cont++;
                    }
                }
                else
                {
                    echo "<p>A extensão do arquivo $nomeArquivo não é suportada!</p>";
                }
            }
            else
            {
                echo "<p>Selecione os arquivos que deseja enviar!</p>";
            }
            
            if($contArquivos == $cont)
            {
                $destino = "D:\arquivos/" . md5(uniqid(rand(),true)) . strrchr($_FILES["arquivo"]["name"][$chave],'.');
                $controle = move_uploaded_file($_FILES["arquivo"]["tmp_name"][$chave],$destino);

                if($controle)
                {
                    $verifica=1;
                    echo "<a href=".$_FILES['arquivo']['tmp_name'][$chave].">"."<p>".$_FILES["arquivo"]["name"][$chave]."</p>"."</a>";
                }
                else
                {
                    echo "<p>Houve algum problema!<p>";
                    
                }
            }
            else
            {
                $verifica=-1;
            }
        }      
        
        if($verifica == -1)
        {
            echo "<p>Não foi possível mover os arquivos!<p>";
        }
        else
        {
            echo "<p>Arquivos movidos com sucesso!</p>";
        }
    }
    

?>
