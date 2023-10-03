<?php
#Função anônima Closure
$margemDeLucro = 25;
echo "<h3>Função anônima (Closure)</h3>";
$obterPrecoDeVendaClosure = function(float $custo) use ($margemDeLucro): float{
    return $custo + (($custo * $margemDeLucro) / 100);
};

echo "Com Closure o preço de venda é R\$".$obterPrecoDeVendaClosure(100)."<br>";
var_dump($obterPrecoDeVendaClosure);
echo "<hr>";
?>