<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
</head>
<body>
    <table border="1px">
        <thead>
            <tr>
                <th>MODELO</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $veiculos = array(
                    ["modelo" => "Clio", "valor" => "20000"],
                    ["modelo" => "Gol", "valor" => "35000"],
                    ["modelo" => "Uno", "valor" => "30000"]
                );

                $total = 0;
                foreach($veiculos as $veiculo){
                    echo "<tr>";
                    foreach($veiculo as $indice => $carro){
                        echo "<td>".$carro."</td>";
                        if($indice == "valor"){
                            $total += $carro;
                        }
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
               <td colspan="2">
                <?php
                    echo $total;
                ?>
               </td> 
            </tr>
        </tfoot>
    </table>
</body>
</html>