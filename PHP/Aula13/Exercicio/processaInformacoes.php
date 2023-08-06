<?php
require_once("funcoes.php");

if(empty($_POST["numero1"]) || empty($_POST["numero2"]) || empty($_POST["operadores"])){
    echo "Alguma informação não foi preenchida, por favor insira todas as informações pedidas.";
}else{
    $n1 = floatval($_POST["numero1"]);
    $n2 = floatval($_POST["numero2"]);
    $operador = $_POST["operadores"];
    $resultado;
    switch($operador){
        case "+":
            $resultado = soma($n1, $n2);
            echo "O resultado da conta ".$n1.$operador.$n2." é ".$resultado;
            break;
        case "-":
            $resultado = subtracao($n1, $n2);
            echo "O resultado da conta ".$n1.$operador.$n2." é ".$resultado;
            break;    
        case "*":
            $resultado = multiplicacao($n1, $n2);
            echo "O resultado da conta ".$n1.$operador.$n2." é ".$resultado;
            break;
        case "/":
            $resultado = divisao($n1, $n2);
            echo "O resultado da conta ".$n1.$operador.$n2." é ".$resultado;
            break;
    }
}
?>