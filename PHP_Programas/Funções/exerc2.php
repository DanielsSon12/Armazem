<?php
//______________ARROW FUNCTION_______________\\

$precoDeCusto = 450.0;
$margemDeLucro = 25.0;

//Usando arrow function
$precoDeVenda2 = fn($custo, $margem) => $custo += (($custo * $margem) / 100);

//Vai imprimir a arrow function que também é um clousure
echo "<br>Arrow function sem receber um valor real para seus parâmetros: <br>";
var_dump($precoDeVenda2);
echo "<br><br>";

//Vai imprimir o resultado da chamada da função
echo "<br>Resultado da arrow function recebendo valores para seus parâmetros: <br>";
var_dump($precoDeVenda2($precoDeCusto, $margemDeLucro));
echo "<br><br>";

//As únicas coisas que mudaram da função normal para a arrow function foi:
//A redução da palavra function por fn;
//O par de chaves {} foi substituido por uma arrow =>;
//O return foi suprimido;
?>