<?php
$texto = '10';
$num = (integer) $texto;
$texto = (string) $num;

$valor = 3.2;
echo $valor;
$valor = (int) $valor;
echo $valor;

$b = 0;
$num = (bool) $b;
$num = (bool) 45;
$num = (bool) -5;
?>