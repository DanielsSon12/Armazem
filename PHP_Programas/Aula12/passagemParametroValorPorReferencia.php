<?php
//Passagem por referencia (declaração da função)
function incrementar (int &$num): void{
    $num++;
}

//Chamada da função
$x = 10;
echo 'A variavel $x vale'.$x.'.<br>';
incrementar($x);//x passa a valer 11
echo 'A variavel $x agora vale'.$x.'.<br>';
?>