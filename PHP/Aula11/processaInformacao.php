<?php
    require_once ("funcoes.php");
    
    /*
        Pode-se fazer desse jeito, tirando o if e o else.
        Fazendo desta forma nós fazemos a verificação com isset e empty ao mesmo tempo em uma linha.
    */
    /*
        $nome = (isset($_POST["nome"]))? strtoupper($_POST["nome"]):null;
        $nota1 = (isset($_POST["nota1"]))? (float)($_POST["nota1"]):null;
        $nota2 = (isset($_POST["nota2"]))? (float)($_POST["nota2"]):null;
        $totalAula = (isset($_POST["totalAulas"]))? (float)($_POST["totalAulas"]):null;
        $numeroFalta = (isset($_POST["numeroFaltas"]))? (float)($_POST["numeroFaltas"]):null;
    */

    if(empty($_POST["nome"]) && empty($_POST["nota1"]) && empty($_POST["nota2"]) && empty($_POST["totalAulas"]) && empty($_POST["numeroFaltas"])){
        echo "As informações são obrigatórias! Por favor insira elas corretamente.";
    }else{
        $nome = $_POST["nome"];
        $nota1 = floatval($_POST["nota1"]);
        $nota2 = floatval($_POST["nota2"]);
        $totalAula = floatval($_POST["totalAulas"]);
        $numeroFalta = floatval($_POST["numeroFaltas"]);
        
        $mediaAluno = mediaAluno($nota1, $nota2);
        $frequenciaAluno = frequenciaAluno($totalAula, $numeroFalta);
        $situacao = " ";
        $situacaoAluno = situacaoAluno($mediaAluno, $frequenciaAluno, $situacao);

        echo "Nome: $nome <br>";
        echo "Nota 1: $nota1 <br>";
        echo "Nota 2: $nota2 <br>";
        echo "Total de aulas: $totalAula <br>";
        echo "Número de faltas: $numeroFalta <br>";
        echo "Média: $mediaAluno <br>";
        echo "Frequência do aluno: $frequenciaAluno % <br>";
        echo "Situação do aluno: $situacaoAluno <br>";


    }

    
?>