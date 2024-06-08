<?php
    //Declare obtemMedia recebendo n notas e usando func_get_args(), for e func_num_args()
    function obtemMedia(): float{
       $n = func_get_args();
       $qtdDeArgs = func_num_args();
       $soma = 0;
       for($i = 0; $i < $qtdDeArgs; $i++){
           $soma += $n[$i];
       }
       return ($soma / $qtdDeArgs);
    }

    //Declare obtemMedia2 recebendo um array de notas e usando array_sum, sizeof ou count
    function obtemMedia2(float ...$n): float{
        return (array_sum($n) / sizeof($n));
    }
    //Declare obtemMedia recebendo n notas e usando spread operator, foreach e func_num_args()
    
    //Declare obtemSituacao recebendo a média e retornando AP, RC ou RP 
    
    //Declare obtemSituacao2 recebendo uma função de callback que calcula a média 
    //com base em um array de notas e retornando AP, RC ou RP 

    //Declare obtemSituacao3 recebendo uma função de callback que calcula a média 
    //com base em spread operator de notas e retornando AP, RC ou RP 
?>
