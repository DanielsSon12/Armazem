<?php
//______________FUNÇÕES ANÔNIMAS E CALLBACK_______________\\

//Criando uma função anônima (lambda)
$media = function (float ...$notas): float{
    return array_sum($notas) / count($notas);
};

//declarando uma variável e atribuindo valor a ela
$n4 = 7.7;

//Invocando a função anônima
echo "O valor da média é ".$media(5.9, 6.0, 7.1, $n4)."<br>";

//Declarando uma função que recebe outra função como 1º argumento e valores
//do tipo float como argumentos seguintes:
$resultado = function(callable $fnMedia, float ...$notas):string{
    //Os 3 pontos (...) são para que o tipo seja mantido e não entendido
    //como um único valor do tipo array
    $valorMedia = $fnMedia(...$notas);

    //Utilizando um operador ternário para fazer a verificação
    return ($valorMedia >= 6.0) ? "Aprovado" : "Reprovado";
};

echo "O resultado é ".$resultado($media, 5.9, 6.0, 7.1, $n4)."<br>";
?>