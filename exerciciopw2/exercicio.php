<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conjectura de Collatz</title>
</head>
<body>
    


    <?php

    $contador = 1;
    $i = 0;
    $lista = [];
    $maior = 0;
    echo "<h1>Conjectura de Collatz</h1>";
    echo "<p1>3x+1</p1>";
    echo "<br><br>";
    echo "<table border = '1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<td>Número</td>";
    echo "<td>Passos</td>";
    echo "<td>Maior número</td>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while($i < 1000)
    {
        $i++;
        //echo("Número: ". $i . "<br>");
        $resultado = $i;
        echo "<tr>";
        echo "<td>$i</td>";
        array_push($lista,$resultado);

        while($resultado != 1)
        {
            if($resultado % 2 == 0)
            {
                $resultado = $resultado / 2;
                array_push($lista,$resultado);
                $contador++;
            }
            else
            {
                $resultado = (3 * $resultado) + 1;
                $contador++;
                array_push($lista,$resultado);
            }
        }
        
        for($x=0;$x<count($lista);$x++)
            if($lista[$x] > $maior)
                $maior = $lista[$x];

        //echo("Passos: " . $contador . "<br>");
        //echo("Maior:" . $maior . "<br>");
        //echo("<br>");
        echo "<td>$contador</td>";
        echo "<td>$maior</td>";
        $contador = 1;
        $lista = [];
        $maior = 0;
        echo "</tr>";

    }
    echo "</tbody>";
    echo "</table>";
    
    
        
    
  



    ?>

</body>
</html>