<?php
function soma(float $a, float $b): float{
    return ($a + $b);
}

function somav2(float $a, float $b): float{
    $numArgs = func_num_args();
    $args = func_get_args();
    $resultado = 0;
    for($i = 0; $i < $numArgs; $i++){
        $resultado += $args[$i];
    }
    return $resultado;
}

$x = 20;
$y = 50;

echo 'O  resultado da soma de $x e $y é '.soma($x, $y)."<br>";
echo 'O resultado da soma de $x, $y e outros números é '.somav2($x, $y, 7.8, 90.6)."<br>";
?>