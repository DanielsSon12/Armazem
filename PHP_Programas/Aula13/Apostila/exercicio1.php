<?php
//Declaração (chave => valor)
$meuArray = array(
    'nome' => 'Juca',
    'idade' => 20,
    10 => 'Chocolate',
    11 => 500,
    'time' => 'Fluminense'
);

echo $meuArray['nome'].'<br/>'; //'Juca'
echo $meuArray['idade'].'<br/>'; //20
echo $meuArray[10].'<br/>'; //'Chocolate'
echo $meuArray[11].'<br/>'; //500
echo $meuArray['time'].'<br/>'; //'Fluminense'

echo '<br/><br/>';

//Chaves Automáticas
$novoArray = array(100, 200, 300);

$a = $novoArray[0]; //100
$b = $novoArray[1]; //200
$c = $novoArray[2]; //300

$trimestre = array(
    1 => 'Janeiro', 'Fevereiro', 'Março'
);

echo $trimestre[1].'<br/>'; //'Janeiro'
echo $trimestre[2].'<br/>'; //'Fevereiro'
echo $trimestre[3].'<br/>'; //'Março'
?>