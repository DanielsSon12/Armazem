<?php
    require_once ("funcoes.php");

    if (isset($_POST["nome"]) && isset($_POST["quantidadehoras"]) && isset($_POST["valorhoraaula"])){

        $nome = $_POST["nome"];
        $qtdhora = floatval($_POST["quantidadehoras"]);
        $vlrhraula = floatval($_POST["valorhoraaula"]);

        $salario = "";
        salarioProfessor($qtdhora, $vlrhraula, $salario);
        echo "Seu salário é de R$ $salario . <br>";
        
        $faixaImposto = faixaImpostoRenda ($salario);
        echo "Sua faixa é: $faixaImposto";

    }else echo "A algum erro no código, ou alguma informção foi inserida incorretamente";
?>