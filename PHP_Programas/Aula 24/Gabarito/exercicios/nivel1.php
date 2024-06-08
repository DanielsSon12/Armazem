<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - nível 1</title>
</head>
<body>
<h3>Exercícios nível 1</h3><hr>
<?php
require_once("funcoes.php");
//Crie um array de alunos com nome, nota1, nota2, media e situacao
$alunos = [
    ["nome"=>"Pedro", "nota1"=>8, "nota2"=>6, "media"=>0.0, "situacao"=>""],
    ["nome"=>"Maria", "nota1"=>9, "nota2"=>7.4, "media"=>0.0, "situacao"=>""],
    ["nome"=>"João", "nota1"=>4, "nota2"=>4, "media"=>0.0, "situacao"=>""],
    ["nome"=>"Ana", "nota1"=>6, "nota2"=>1.4, "media"=>0.0, "situacao"=>""],
    ["nome"=>"Renata", "nota1"=>8.5, "nota2"=>7.5, "media"=>0.0, "situacao"=>""]
];

//Percorra o array de alunos [com passagem por referência] atribuindo média e situação
foreach($alunos as &$aluno){
    $media = obterMedia($aluno['nota1'], $aluno['nota2']);
    //Alternativamente use a função guardada em $obterMedia
    $media = $obterMedia($aluno['nota1'], $aluno['nota2']);
    $situacao = obterSituacao($media);
    $aluno['media'] = $media;
    $aluno['situacao'] = $situacao;
}
?>
<table border="1">
    <thead>
        <th>NOME</th><th>NOTA 1</th><th>NOTA 2</th><th>MÉDIA</th><th>SITUAÇÃO</th>
    </thead>
    <tbody>
    <?php
    //Percorra $alunos montando as linhas de sua tabela
    foreach($alunos as $aluno){
        //Monte uma linha (tr) para cada aluno
        echo "<tr>";
        echo "<td>{$aluno['nome']}</td>";
        echo "<td>{$aluno['nota1']}</td>";
        echo "<td>{$aluno['nota2']}</td>";
        echo "<td>{$aluno['media']}</td>";
        echo "<td>{$aluno['situacao']}</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>
