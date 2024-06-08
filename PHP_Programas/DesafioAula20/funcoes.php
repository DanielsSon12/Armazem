<?php
    //Declare obtemMedia recebendo n notas e usando func_get_args(), for e func_num_args()
    function obtemMedia(float $n1, float $n2, float ...$notas): float{
        $notas = func_get_args();
        $somaNotas = 0;
        for($i = 0; $i < func_num_args(); $i++){
            $somaNotas += $notas[$i];
        }
        return $somaNotas / func_num_args();
    }

    //Declare obtemMedia2 recebendo um array de notas e usando array_sum, sizeof ou count
    function obtemMedia2(array $notas):float{
        return array_sum($notas) / count($notas);
    }

    //Declare obtemMedia3 recebendo n notas e usando spread operator, foreach e func_num_args()
    function obtemMedia3(float ...$notas): float{
        $somaNotas = 0;
        foreach($notas as $nota){
            $somaNotas += $nota;
        }
        return $somaNotas / func_num_args();
    }
    
    //Declare obtemSituacao recebendo a média e retornando AP, RC ou RP 
    function obtemSituacao(float $media):string{
        if($media >= 7){
            return "AP";
        }else if($media >= 4){
            return "RC";
        }else return "RP";
    }

    //Declare obtemSituacao2 recebendo uma função de callback que calcula a média 
    //com base em um array de notas e retornando AP, RC ou RP 
    function obtemSituacao2(callable $fnMedia, array $notas):string{
        $media = $fnMedia($notas);
        if($media >= 7){
            return "AP";
        }else if($media >= 4){
            return "RC";
        }else return "RP";
    }

    //Declare obtemSituacao3 recebendo uma função de callback que calcula a média 
    //com base em spread operator de notas e retornando AP, RC ou RP 
    function obtemSituacao3(callable $fnMedia, float ...$notas):string{
        //Aqui $notas virou um array
        //Preciso separar com spread novamente para passar a função que calcula média
        $media = $fnMedia(...$notas);
        if($media >= 7){
            return "AP";
        }else if($media >= 4){
            return "RC";
        }else return "RP";
    }
?>
