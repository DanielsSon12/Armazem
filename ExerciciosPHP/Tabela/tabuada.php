<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
    <h3>Tabuada</h3>
    <hr>
    <main>
        <table border="1px">
            <thead>
                <tr>
                    <th  colspan="10">
                    Tabuada de 10 gerada automaticamente com laço de    repetição
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $limite = 10;
                    $linha;
                    $coluna;

                    for ($linha = 1; $linha <= $limite; $linha++){
                        echo "<tr>";
                        for ($coluna = 1; $coluna <= $limite; $coluna++){
                            $valorColuna = ($linha*$coluna);
                            echo "<td>$valorColuna</td>";
                        }
                        echo "</tr>";
                    }
                    
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>
