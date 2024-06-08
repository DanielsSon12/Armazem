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
$filme = ["titulo"=>"A HERANÇA DE MR. DEEDS", "nota"=>8.2];
try{
    $sql = "INSERT INTO filmes(titulo,nota) VALUES(?,?)";
    $ps = $con->prepare($sql);
    $ps->bindParam(1,$filme['titulo']);
    $ps->bindParam(2,$filme['nota']);
    $ps->execute();
    echo "Filme inserido com sucesso! O id gerado foi {$con->lastInsertId()}<br>";
}catch(PDOException $e){
    die("Erro ao inserir. {$e->getMessage()}");
}

?>