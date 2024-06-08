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
//OBTER UM FILME
$idDoFilmeObtido = 4;
try{
    $sql = "select * FROM filmes WHERE ID=?";
    $ps = $con->prepare($sql);
    $ps->bindParam(1,$idDoFilmeObtido);
    $ps->execute();
    $filmes = $ps->fetchAll(PDO::FETCH_ASSOC);
    echo "<PRE>";
    print_r($filmes);
    echo "</PRE><HR>";
    foreach($filmes as $filme){
        $filmeObtido = "Id: {$filme['id']} - Titulo: {$filme['titulo']} - Nota: {$filme['nota']}<hr>";
    }
    echo $filmeObtido;
}catch(PDOException $e){
    die("Erro ao conectar com o bd e/ou exibir filmes. {$e->getMessage()}");
}