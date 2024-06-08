<?php 
    declare(strict_types=1);
	//Declare um array chamado $alunos e faça com que ele receba (na posição 0) o valor 'Rafael' para o atributo 'nome' e os valores 0.7 e 1.3 para o atributo 'notas'
    $alunos = array(
        ["nome" => "Rafael",
        "notas" => 0.7, 1.3]
    );
    require_once('funcoes.php');

	//Utilize array_push para adicionar a aluna Paula com as notas 2.7 e 5.3 ao array $alunos
    array_push($alunos, "Paula", 2.7, 5.3);

	//Na posição 2 de $alunos adicione o aluno Fulano com as notas 9.0 e 8.0
    array_push($alunos[2], "Fulano", 9.0, 8.0)

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3{
            text-align: center;
        }
        table{
            width: 50%;
            margin:0px auto;
            border: 1px solid black
        }
        th,td{
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>Notas versão 1</h3><hr>
    <table>
        <thead>
            <tr><th>Nome</th><th>Notas</th><th>Média</th><th>Situação</th></tr>
        </thead>
        <tbody>
            <!-- Aqui você coloca o código php p/ gerar as linhas da tabela (v1) utilize a função obtemMedia
			e obtemSituacao que deverá retornar AP,RC ou RP-->
            <?php

            ?>
        </tbody>
    </table>

    <h3>Notas versão 2</h3><hr>
    <table>
        <thead>
            <tr><th>Nome</th><th>Notas</th><th>Média</th><th>Situação</th></tr>
        </thead>
        <tbody>
             <!-- Aqui você coloca o código php p/ acrescentar uma 3ª nota para cada aluno 
            e gerar as linhas da tabela utilizando obtemMedia2 e obtemSituacao que deverá retornar AP,RC ou RP -->
            <?php

            ?>
        </tbody>
    </table>
	<h3>Notas versão 3</h3><hr>
    <table>
        <thead>
            <tr><th>Nome</th><th>Notas</th><th>Média</th><th>Situação</th></tr>
        </thead>
        <tbody>
             <!-- Aqui você coloca o código php p/ acrescentar o aluno Beltrano com as notas 6.0, 8.0, 9.0 e 5.0  
            e gerar as linhas da tabela utilizando obtemMedia3 e obtemSituacao que deverá retornar AP,RC ou RP-->
            <?php

            ?>
        </tbody>
    </table>
    <h3>Notas versão 4 (callback)</h3><hr>
    <table>
        <thead>
            <tr><th>Nome</th><th>Notas</th><th>Média</th><th>Situação</th></tr>
        </thead>
        <tbody>
             <!-- Aqui você coloca o código php p/ acrescentar uma 3ª nota para cada aluno 
            e gerar as linhas da tabela utilizando obtemSituacao2 e uma função igual à função 
            obtemMedia2 por callback que deverá retornar AP,RC ou RP -->
            <?php

            ?>
        </tbody>
    </table>
    <h3>Notas versão 5 (callback)</h3><hr>
    <table>
        <thead>
            <tr><th>Nome</th><th>Notas</th><th>Média</th><th>Situação</th></tr>
        </thead>
        <tbody>
             <!-- Aqui você coloca o código php p/ acrescentar uma 3ª nota para cada aluno 
            e gerar as linhas da tabela utilizando obtemSituacao3 e uma função igual à função 
            obtemMedia3 por callback que deverá retornar AP,RC ou RP -->
            <?php

            ?>
        </tbody>
    </table>
</body>
</html>