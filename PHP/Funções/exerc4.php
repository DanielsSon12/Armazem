<?php
#Arrow function utilizando variável externa
$margemDeLucro = 30;
echo "<h3>Arrow function utilizando variável externa</h3>";
$obterPrecoDeVendaArrow2 = fn(float $custo): float => $custo + (($custo * $margemDeLucro) / 100);
echo "Com Arrow function acessando escopo externo o preço de venda é R\$".$obterPrecoDeVendaArrow2(100)."<br>";
var_dump($obterPrecoDeVendaArrow2);
echo "<hr>";
?>