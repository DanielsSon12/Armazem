<?php
    function salarioProfessor (float $qtdhora, float $vlrhraula, string &$salario): void{
        $salario = 2000.00 + ($qtdhora * $vlrhraula);
    }

    function faixaImpostoRenda (float $salario): string{
        if ($salario < 3000.00){
            return "Faixa 1";
        }else if ($salario < 4000.00){
            return "Faixa 2";
        }else if ($salario < 6000.00){
            return "Faixa 3";
        }else return "Faixa 4";
    }
?>