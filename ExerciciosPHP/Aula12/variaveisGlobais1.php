<?php
    function testaGlobal (){
        global $valor, $res;
        $valor += 1;
        $res += 1;
        echo 'Valor (dentro da função): '.$valor.', Resultado (dentro da função): '.$res.'<br/>';
    } 
    
    $valor = 100;
    $res = 10 * $valor;
    echo 'Valor (antes da função): '.$valor.', Resultado (antes da função): '.$res.'<br/>';
    echo 'Valor (depois da função): '.$valor.', Resultado (depois da função): '.$res.'<br/>';
?>