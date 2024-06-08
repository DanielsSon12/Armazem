<?php 
    declare(strict_types=1);
    require_once('funcoes.php');
	//Declare um array chamado $alunos e faça com que ele receba (na posição 0) o valor 'Rafael' para o atributo 'nome' e os valores 0.7 e 1.3 para o atributo 'notas'
    $alunos[0] = array(
        "nome" => "Rafael",
        "notas" => [0.7, 1.3]
    );
    print_r($alunos);

	//Utilize array_push para adicionar a aluna Paula com as notas 2.7 e 5.3 ao array $alunos
    array_push($alunos, ["nome" => "Paula", "notas" => [2.7, 5.3]]);

	//Na posição 2 de $alunos adicione o aluno Fulano com as notas 9.0 e 8.0
    $alunos[2]['nome'] = "Fulano";
    $alunos[2]['notas'][] = 9.0;
    $alunos[2]['notas'][] = 8.0;
    print_r($alunos);
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
                foreach($alunos as $linha){
                    $nota1 = $linha['notas'][0];
                    $nota2 = $linha['notas'][1];
                    $media = obtemMedia($nota1, $nota2);
                    $situacao = obtemSituacao($media);
                    echo "<tr>";
                    echo "<td>".$linha['nome']."</td>";
                    echo "<td>| $nota1 | $nota2 |</td>";
                    echo "<td>".$media."</td>";
                    echo "<td>".$situacao."</td>";
                    echo "</tr>";
                } 
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
            $alunos[0]['notas'][] = 5;
            $alunos[1]['notas'][] = 7;
            $alunos[2]['notas'][] = 9;
                foreach($alunos as $linha){
                    $media = obtemMedia2($linha['notas']);
                    $situacao = obtemSituacao($media);
                    echo "<tr>";
                    echo "<td>".$linha['nome']."</td>";
                    echo "<td>";
                        foreach($linha['notas'] as $nota){
                            echo "| $nota |";
                        }
                    echo "</td>";
                    echo "<td>".round($media)."</td>"; //round() é uma função que arredonda o numero para apenas duas casas decimais
                    echo "<td>".$situacao."</td>";
                    echo "</tr>";
                } 
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
                array_push($alunos, ["nome" => "Beltrano", "notas" => [6.0, 8.0, 9.0, 5.0]]);
                foreach($alunos as $linha){
                    $media = obtemMedia3(...$linha['notas']);
                    $situacao = obtemSituacao($media);
                    echo "<tr>";
                    echo "<td>".$linha['nome']."</td>";
                    echo "<td>";
                        foreach($linha['notas'] as $nota){
                            echo "| $nota |";
                        }
                    echo "</td>";
                    echo "<td>".round($media)."</td>";
                    echo "<td>".$situacao."</td>";
                    echo "</tr>";
                } 
            ?>
        </tbody>
    </table>
    <h3>Notas versão 4 (callback)</h3><hr>
    <table>
        <thead>
            <tr><th>Nome</th><th>Notas</th><th>Média</th><th>Situação</th></tr>
        </thead>
        <tbody>
             <!-- Aqui você coloca o código php p/ acrescentar uma 4ª nota para cada aluno 
            e gerar as linhas da tabela utilizando obtemSituacao2 e uma função igual à função 
            obtemMedia2 por callback que deverá retornar AP,RC ou RP -->
            <?php
            $alunos[0]['notas'][3] = 6;
            $alunos[1]['notas'][3] = 8;
            $alunos[2]['notas'][3] = 9;
            $alunos[3]['notas'][3] = 10;
                foreach($alunos as $linha){
                    $media = obtemMedia2($linha['notas']);
                    $situacao2 = obtemSituacao2('obtemMedia2', $linha['notas']);
                    echo "<tr>";
                    echo "<td>".$linha['nome']."</td>";
                    echo "<td>"; 
                        foreach($linha['notas'] as $nota){
                            echo "| $nota |";
                        }
                    echo "</td>";
                    echo "<td>".round($media, 2)."</td>";
                    echo "<td>".$situacao2."</td>";
                    echo "</tr>";
                } 
            ?>
        </tbody>
    </table>
    <h3>Notas versão 5 (callback)</h3><hr>
    <table>
        <thead>
            <tr><th>Nome</th><th>Notas</th><th>Média</th><th>Situação</th></tr>
        </thead>
        <tbody>
            <!-- Aqui você coloca o código php e gerar as linhas da tabela utilizando obtemSituacao3 e uma função 
            igual à função obtemMedia3 por callback que deverá retornar AP,RC ou RP -->
            <?php
                foreach($alunos as $linha){
                    $media = obtemMedia3(...$linha['notas']);
                    $situacao3 = obtemSituacao3('obtemMedia3', ...$linha['notas']);
                    echo "<tr>";
                    echo "<td>".$linha['nome']."</td>";
                    echo "<td>"; 
                        foreach($linha['notas'] as $nota){
                            echo "| $nota |";
                        }
                    echo "</td>";
                    echo "<td>".round($media, 2)."</td>";
                    echo "<td>".$situacao3."</td>";
                    echo "</tr>";
                } 
            ?>
        </tbody>
    </table>
</body>
</html>