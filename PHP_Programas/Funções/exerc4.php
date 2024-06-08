<?php
//______________FUNÇÕES UTILIZANDO O SPREAD OPERATOR_______________\\

$numero1 = 25;
$numero2 = 20;

//Spread operator
function somar2(int ...$numeros){
    //SOLUÇÃO SIMPLES
    return array_sum($numeros);
    
    //Solução menos inteligente
    //$total = 0.0;
    //foreach($numeros as $n){
    //  $total += $n;
    //}
    //return $total;
}

echo "<br>Resultado da função somar2 usando spread operator:<br>";
var_dump(somar2($numero1, $numero2, 38, 47, 26));//156
echo "<br><br>";

//IMPORTANTE: O spread operator também pode ser utilizado em funções anônimas.

//Usando o tipo de retorno para fazer conversão de tipos:
function somar3(int ...$numeros):string {
    return array_sum($numeros);
}

echo "<br>Resultado da função somar3 retornando o tipo convertido para string:<br>";
var_dump(somar3($numero1, $numero2, 38, 47, 26));
echo "<br><br>";

//Agora em vez de retornar 156, a função vai retornar o tipo convertido para string que é "156"
//O mesmo pode ser feito em relação a outros tipos compatíveis.
//De float para int com perda de valor.
//De int para float sem grandes problemas.
//De boolean para int, enfim... varias possibilidades.
?>