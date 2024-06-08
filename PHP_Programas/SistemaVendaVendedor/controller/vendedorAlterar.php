<?php
    require_once("../model/funcoesUtil.php");
    $conexao = getConexao();
    $vendedorPut = file_get_contents('php://input');
    $vendedorMatriz = json_decode($vendedorPut, true);

    $id = (isset($vendedorMatriz["id"])) ? intval($vendedorMatriz["id"]) : "";
    $nome = (isset($vendedorMatriz["nome"])) ? strtoupper($vendedorMatriz["nome"]) : "";
    $percentual_comissao = (isset($vendedorMatriz["percentual"])) ? floatval($vendedorMatriz["percentual"]) : "";
    
    if ($id != "" && $nome != "" && $percentual_comissao != "") {
        try {
            $sql = "UPDATE vendedor SET nome = ?, percentual_comissao = ? WHERE id = ?";
            $stmt = $conexao -> prepare($sql); 
            $stmt -> bindParam(1, $nome); 
            $stmt -> bindParam(2, $percentual_comissao); 
            $stmt -> bindParam(3, $id); 
            $stmt -> execute();
            responder(false, "Vendedor(a) de id $id alterado(a) com sucesso! Linhas afetadas: {$stmt -> rowCount()}");
        } catch(PDOException $e){
            responder(true, "Erro: Não foi possível efetuar a alteração no BD" . $e -> getMessage() . ".");
        }
    }else{
        responder(true, "Erro ao alterar vendedor(a). Informações incompletas enviadas.");
    }
?>