<?php
declare(strict_types=1);
require_once('conexao.php');
$con = null;
try{
    $con = getConexao();
    print_r($con);
}catch(PDOException $e){
    die("Erro ao conectar com o bd. {$e->getMessage()}");
}
//INSERIR
$filmeParaAlterar = ["id"=>6,"titulo"=>"GOLPE BAIXO", "nota"=>9.0];
try{
    $sql = "UPDATE filmes SET titulo=:TITU, nota=:NOTA WHERE id =:ID";
    $ps = $con->prepare($sql);
    $ps->bindParam('TITU',$filmeParaAlterar['titulo']);
    $ps->bindParam('NOTA',$filmeParaAlterar['nota']);
    $ps->bindParam('ID',$filmeParaAlterar['id']);
    $ps->execute();
    echo "Filme alterado com sucesso! Linhas afetadas: {$ps->rowCount()}<br>";
}catch(PDOException $e){
    die("Erro ao inserir. {$e->getMessage()}");
}

?>