<?php
    include("funcaoIMC.php");

    if(isset($_POST["peso"]) && isset($_POST["altura"])){
        
        $peso = floatval($_POST["peso"]);
        $altura = floatval($_POST["altura"]);

        $indiceMS = IMC($peso, $altura);

        if ($indiceMS < 18.5) 
            echo "Sua IMC é $indiceMS você esta abaixo do peso";
        elseif($indiceMS <= 24.9)
            echo "Sua IMC é $indiceMS você esta com o peso normal";
        elseif($indiceMS > 25 && $indiceMS < 29.9)
            echo "Sua IMC é $indiceMS você esta com sobrepeso";
        elseif($indiceMS < 34.9)
            echo "Sua IMC é $indiceMS você tem obesidade grau 1";
        elseif($indiceMS < 39.9)
            echo "Sua IMC é $indiceMS você tem obesidade grau 2";
        else
            echo "Sua IMC é $indiceMS você tem obesidade grau 3";  

    }
?>