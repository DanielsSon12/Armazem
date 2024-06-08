<?php
declare(strict_types=1);

/*Declare uma função nomeada obterMedia que receba duas notas 
e retorne a média do aluno*/
function obterMedia(float $n1, float $n2):float{
    return ($n1+$n2)/2;
}
//Guarde uma função anônima exatamente igual em uma variável
$obterMedia = function(float $n1, float $n2):float{
    return ($n1+$n2)/2;
};

/*Declare uma função nomeada obterSituacao que receba a média do aluno 
e devolva "Aprovado","Reprovado" ou "Recuperação"*/
function obterSituacao(float $media):string{
    if($media>=7)
        return "Aprovado";
    elseif($media>=4)
        return "Recuperação";
    else
        return "Reprovado";
}
?>