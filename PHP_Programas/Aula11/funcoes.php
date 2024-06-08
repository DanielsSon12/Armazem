<?php

function mediaAluno(float $nota1, float $nota2):float{
    $media = ($nota1 + $nota2) / 2;
    return $media;
}

function frequenciaAluno(float $totalAula, float $numeroFalta): float{
    $frequencia = (($totalAula - $numeroFalta) * 100) / $totalAula;
    return $frequencia;
}

function situacaoAluno(float $media, float $frequen, string $situacao): string{
    if($frequen < 75){
        $situacao = 'Reprovado por falta';
    }else{
        if($media > 7){
            $situacao = 'Aprovado';
        }else{
            if($media < 4){
                $situacao = 'Reprovado';
            }
            else $situacao = 'Recuperação';
        }
    }
    return $situacao;
}

?>