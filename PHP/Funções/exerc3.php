<?php
//Usando Arrow function
$precoDeVenda2 = fn($custo, $margem) => $custo += (($custo * $margem) / 100);
//Vai imprimir a arrow function que também é um Clousure
var_dump($precoDeVenda2);
//Vai imprimir o resultado da chamada da função
echo "<br>";
var_dump($precoDeVenda2($precoDeCusto, $margemDeLucro));
?>