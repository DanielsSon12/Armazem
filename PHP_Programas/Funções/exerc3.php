<?php
//______________FUNÇÕES TIPADAS_______________\\

function somar(int $n1, int $n2): int{
    return ($n1 + $n2);
}

$numero1 = 25;
$numero2 = 20;

echo "<br>Resultado da função tipada Somar recebendo duas variaveis com valores como parâmetro: <br>";
var_dump(somar($numero1, $numero2));//45
echo "<br><br>";

echo "<br>Resultado da função tipada Somar recebendo uma variável com valor e um float: <br>";
var_dump(somar($numero1, 25.75));//Vai imprimir 50 e não 50.75
//Quando passamos um float esperando um int, perde-se a parte não inteira (0.75)
echo "<br><br>";

//Passando um valor incompatível
echo "<br>Resultado da função tipada Somar recebendo uma variável com valor e outro valor incompatível: <br>";
var_dump(somar($numero2, "Rafael"));//Vai dar erro fatal.
//A função não espera uma string

$somar = function(int $n1, int $n2): int{
    return ($n1 + $n2);
};
echo "<br>";
var_dump($somar($numero1, $numero2));
?>