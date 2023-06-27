<?php
//  SINTAXE:
//  expressão ? valorCasoVerdadeiro : valorCasoFalso;
$a = 10;
$b= 4;   

$c = ($a > $b) ? 'Maior' : 'Menor ou igual';
$tratamento = ('M' == $sexo) ? 'Sr.' : 'Srª';

echo $c;
echo "Tratamento: $tratamento";
?>