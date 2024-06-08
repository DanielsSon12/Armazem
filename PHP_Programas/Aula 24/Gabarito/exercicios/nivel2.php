<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - nível 2</title>
</head>
<body>
<h3>Exercícios nível 2</h3><hr>
<?php
require_once("funcoes.php");
require_once("funcoes2.php");
//Crie um array de alunos com nome, nota1 e nota2
$alunos = array(
    ["nome"=>"Pedro", "nota1"=>8, "nota2"=>6],
    ["nome"=>"Maria", "nota1"=>9, "nota2"=>7.4],
    ["nome"=>"João", "nota1"=>4, "nota2"=>4],
    ["nome"=>"Ana", "nota1"=>6, "nota2"=>1.4],
    ["nome"=>"Renata", "nota1"=>8.5, "nota2"=>7.5]
);
?>
<table border="1">
    <thead>
        <th>NOME</th><th>NOTA 1</th><th>NOTA 2</th><th>SITUAÇÃO</th>
    </thead>
    <tbody>
    <?php
    //Percorra $alunos montando as linhas de sua tabela
    foreach($alunos as $aluno){
        //obtenha a situação do aluno a cada iteração recebendo uma função anônima na posição
        //do argumento $fnMedia
        $situacao = obterSituacao2(function(float $n1, float $n2){
            return ($n1+$n2)/2;
        }, $aluno['nota1'], $aluno['nota2']);
        //Alternativamente, chame obterSituacao2 recebendo a função nomeada obterMedia
        $situacao = obterSituacao2('obterMedia', $aluno['nota1'], $aluno['nota2']);
        //Alternativamente, chame obterSituacao2 recebendo a função anônima guardada em $obterMedia
        $situacao = obterSituacao2($obterMedia, $aluno['nota1'], $aluno['nota2']);
        //Monte uma linha (tr) para cada aluno
        echo "<tr>";
        echo "<td>{$aluno['nome']}</td>";
        echo "<td>{$aluno['nota1']}</td>";
        echo "<td>{$aluno['nota2']}</td>";
        echo "<td>{$situacao}</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>