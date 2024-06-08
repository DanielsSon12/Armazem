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
$idDeFilmeParaExcluir = 5;
try{
    $sql = "DELETE FROM filmes WHERE id =:ID";
    $ps = $con->prepare($sql);
    $ps->bindParam('ID',$idDeFilmeParaExcluir);
    $ps->execute();
    echo "Filme excluido com sucesso! Linhas afetadas: {$ps->rowCount()}<br>";
}catch(PDOException $e){
    die("Erro ao inserir. {$e->getMessage()}");
}

?>