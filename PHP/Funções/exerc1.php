<?php
#TRABALHANDO EM MODO STRITO
declare(strict_types = 1);
#FUNÇÕES NOMEADAS
echo "<h3>FUNÇÕES NOMEADAS</h3>";
function multiplicar(float $n1, float $n2, float ...$numeros): float{
    $resultado = $n1 * $n2;
    foreach($numeros as $numero){
        $resultado *= $numero;
    }
    return $resultado;
}

echo "<hr>O resultado da multiplicação é ".multiplicar(10, 2.5, 2, 3)."<br>";
var_dump(multiplicar(10, 2.5, 2, 3));
echo "<hr>";

#Função anônima (lambda) tipo Closure
echo "<h3>Função anônima (lambda) tipo Closure</h3>";
$margemDeLucro = 25;
$obterPrecoDeVenda = function(float $custo, float $margem): float{
    return $custo + (($custo * $margem) / 100);
};

echo "Com lambda o preço de venda é R/$".$obterPrecoDeVenda(100, $margemDeLucro)."<br>";
var_dump($obterPrecoDeVenda);
echo "<hr>";
?>