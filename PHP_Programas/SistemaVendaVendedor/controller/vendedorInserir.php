<?php
require_once("../model/funcoesUtil.php");
$vendedor = file_get_contents("php://input");
$vendedorMatriz = json_decode($vendedor, true);

$conexao = getConexao();

$id = (isset($vendedorMatriz["id"])) ? intval($vendedorMatriz["id"]) : "";
$nome = (isset($vendedorMatriz["nome"])) ? strtoupper($vendedorMatriz["nome"]) : "";
$percentual_comissao = (isset($vendedorMatriz["percentual"])) ? intval($vendedorMatriz["percentual"]) : "";

if($nome != "" && $percentual_comissao != ""){
    try{
        $sql = "INSERT INTO vendedor(nome, percentual_comissao) values (?,?)";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $percentual_comissao);

        $stmt->execute();

        responder(false, "Vendedor inserido com sucesso!");
    }catch(PDOException $erro){
        responder(true, "Erro ao inserir vendedor.".$erro->getMessage());
    }
}else{
    responder(true, "Informações incompletas.");
}
?>