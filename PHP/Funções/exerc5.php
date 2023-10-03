<?php
#Funções anônimas e callback
echo "<h3>Funções anônimas e callback</h3>";
echo "<p>Função anônima com spread operator</p><br>";
$obterMedia = function(float ...$notas): float{
    //return array_sum($notas)/sizeof($notas);//Solução simples
    //solução complicada
    $soma = 0;
    foreach($notas as $nota){
        $soma += $nota;
    }
    return $soma/func_num_args();
};
#Fazendo o callback
$obterSituacao = function(callable $fnMedia, float ...$notasDoAluno): string{
    $media = $fnMedia(...$notasDoAluno); //Linha importante
    if($media >= 7){
        return "Aprovado";
    }elseif($media >= 4){
        return "Recuperação";
    }else return "Reprovado";
};
echo "Com \$obterMedia como callback de \$obterSituacao, a situação é: ".$obterSituacao($obterMedia, 8, 6, 7)."<br>";
var_dump($obterMedia);
echo "<hr>";
var_dump($obterSituacao);
echo "<hr>";
?>