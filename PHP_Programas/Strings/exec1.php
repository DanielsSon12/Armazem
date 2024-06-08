<?php
//empty - Retorna true se a string estiver vazia
    echo empty(''); //1
    var_dump(empty('Fulano')); //boolean false

//strlen - Retorna o tamanho de uma string
echo strlen('Rafael'); //6

//strpos - Retorna a posição da primeira ocorrência de uma string
$texto = 'Olá Mundo';

var_dump(strpos($texto, 'X')); //false
var_dump(strpos($texto, 'O')); //0
var_dump(strpos($texto, 'M')); //4
var_dump(strpos($texto, 'M', 5)); //false
var_dump(strpos($texto, 'M', 4)); //4

//substr - Retorna parte de uma string

$texto = 'Ola Mundo';

echo substr($texto, 1).'<br>'; //'lá Mundo'
echo substr($texto, 0, 3).'<br>'; //'Olá'
echo substr($texto, 4, 5).'<br>'; //'Mundo'

?>