<?php

require_once("funcoes.php");

if (empty($_POST['numero1']) || empty($_POST['numero2']) || empty($_POST['operadores'])){
    echo "ERRO</br>";
    echo "Algumas informações não foram inseridas, ou á algum erro no código";
} else {
    $n1 = floatval($_POST['numero1']);
    $n2 = floatval($_POST['numero2']);
    $op = $_POST['operadores'];

    switch ($op){
        case "+":
            $resultado = soma($n1, $n2);
            echo "SOMA: $resultado";
            break;
        case "-":
            $resultado = subtracao($n1, $n2);
            echo "SUBTRAÇÃO: $resultado";
            break;
        case "*":
            $resultado = multiplicacao($n1, $n2);
            echo "MULTIPLICAÇÃO: $resultado";
            break;
        case "/":
            $resultado = divisao($n1, $n2);
            echo "DIVISÃO: $resultado";
            break;
    }
}

?>