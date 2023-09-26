<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
</head>
<body>
    <table border="1px">
        <thead>
            <tr>
                <th>ALIMENTOS</th>
                <th>QUANTIDADE</th>
                <th>PREÇO</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $compras = array(
                    ["alimentos" => "cenoura", "quantidade" => "500", "preco" => "2"],
                    ["alimentos" => "batata", "quantidade" => "100", "preco" => "3"],
                    ["alimentos" => "banana", "quantidade" => "200", "preco" => "4"],
                    ["alimentos" => "mamão", "quantidade" => "400", "preco" => "5"]
                );

                $totalqtd = 0;
                foreach($compras as $compra){
                    echo "<tr>";
                    foreach($compra as $indice => $alimento){
                        echo "<td>".$alimento."</td>";
                        if($indice == "quantidade"){
                            $totalqtd += $alimento;
                        }
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td>TOTAL</td>
                <td colspan="2">
                    <?php
                        echo $totalqtd;
                    ?>
                </td>
            </tr>
        </tfoot>
    </table>
</body>
</html>