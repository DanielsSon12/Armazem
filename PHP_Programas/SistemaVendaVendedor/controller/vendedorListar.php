<?php
require_once("../model/funcoesUtil.php");
$conexao = getConexao();

try{
    $sql = "SELECT * FROM vendedor";

    $stmt = $conexao -> prepare($sql);
    $stmt -> execute();

    $vendedores = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    responder(false, "Vendedores listados com sucesso!", $vendedores);
}catch(PDOException $erro){
    responder(true, "Erro ao listar vendedores.");
}
?>