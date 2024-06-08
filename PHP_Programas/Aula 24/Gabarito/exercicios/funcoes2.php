<?php
declare(strict_types=1);

/*Declare uma função nomeada obterSituacao2 que receba a média do aluno
através de uma função anônima por callback 
e devolva "Aprovado","Reprovado" ou "Recuperação"
A média do aluno é obtida com base em duas notas*/
function obterSituacao2(callable $fnMedia, float $n1, float $n2):string{
    //Invocando a função recebida por callback
    $media = $fnMedia($n1,$n2);
    if($media>=7)
        return "Aprovado";
    elseif($media>=4)
        return "Recuperação";
    else
        return "Reprovado";
}
?>