<?php

echo "</br>SOMA DOS NÚMEROS ÍMPARES COM FOR E WHILE</br>";

//SOMA COM FOR
$forSoma = 0;
for ($i = 0; $i <= 100; $i ++) {  
    if($i % 2 != 0){
        $forSoma += $i;
    }
}

echo "</br>Soma com for: ".$forSoma;

//SOMA COM WHILE
$whileSoma = 0;
$j = 0;
while ($j <= 100) {
    if ($j % 2 != 0) {
        $whileSoma += $j;
    }
    $j ++;
}

echo "</br>Soma com while: ".$whileSoma;

?>