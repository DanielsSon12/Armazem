<?php
    //Declarando de função
    function digaOi(): void{
        echo 'Oi<br>';
    }

    //Declarando função com retorno
    function soma(int $a, int $b): int{
        return ($a + $b);
    }

    //Chamada das funções
    digaOi();
    $x = 20;
    $y = 30;
    $resultado = soma($x, $y);
    echo "O total da soma de $x e $y é $resultado<br>";
?>