<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - nível 3</title>
</head>
<body>
<h3>Exercícios nível 3</h3><hr>
<?php
//Crie um array de produtos com descricao, preco e estoque
$produtos = array(
    ["descricao"=>"Queijo Minas", "preco"=>25, "estoque"=>6],
    ["descricao"=>"Manteiga", "preco"=>14.5, "estoque"=>11],
    ["descricao"=>"Leite Integral", "preco"=>6, "estoque"=>24],
    ["descricao"=>"Queijo ralado", "preco"=>7.5, "estoque"=>20],
    ["descricao"=>"Pão de forma", "preco"=>11, "estoque"=>30]
);
?>
<table border="1">
    <thead>
        <th>descricao</th><th>PREÇO</th><th>ESTOQUE</th>
    </thead>
    <tbody>
    <?php
    //Percorra $produtos montando as linhas de sua tabela
    //No rodapé, adicione uma linha mostrando o total em mercadorias

    //Crie uma variável para acumular os valores
    $totalEmMercadorias = 0.0;
    foreach($produtos as $p){
        //Aproveite a iteração para ir incrementando $totalEmMercadorias
        $totalEmMercadorias = $totalEmMercadorias + ($p['preco'] * $p['estoque']);
        //Monte uma linha (tr) para cada p
        echo "<tr>";
        echo "<td>{$p['descricao']}</td>";
        echo "<td>{$p['preco']}</td>";
        echo "<td>{$p['estoque']}</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
    <tfoot>
    <?php
    //Monte uma linha de rodapé p/ exibir o $totalEmMercadorias
    echo "<tr>";
    echo "<td>TOTAL EM MERCADORIAS</td>";
    $totalEmMercadorias = round($totalEmMercadorias,2);
    echo "<td colspan=2>$totalEmMercadorias</td>";
    echo "</tr>";
    ?>
    </tfoot>
</table>
</body>
</html>