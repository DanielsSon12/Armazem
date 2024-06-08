<?php
    // Obtem a conexão com o banco de dados
    require_once("../model/funcoesUtil.php");
    $conexao = getConexao();

    // Recupera o texto JSON via post (Quando se envia via requisição AJAX, não temos $_POST)
    $vendaDelete = file_get_contents('php://input');

    // Decodifica o texto JSON p/ uma matriz associativa (argumento true de json_decode)
    $vendaMatriz = json_decode($vendaDelete, true);

    $id = (isset($vendaMatriz["id"]) && $vendaMatriz["id"] != null) ?
    intval($vendaMatriz["id"]) : "";
    $quadrimestre = (isset($vendaMatriz["quadrimestre"]) && $vendaMatriz["quadrimestre"] != null) ?
    intval($vendaMatriz["quadrimestre"]) : "";

    if($id != "" && $quadrimestre != "") {
        try{
            $tabela = "vendas_q".$quadrimestre;
            $sql = "DELETE FROM $tabela WHERE id=? AND quadrimestre=?";

            // Prepara a instrução e em seguida passa os arugumentos. Evita SQL Injecion
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(1, $id);
            $stmt->bindParam(2, $quadrimestre);
            $stmt->execute();
            responder(false, "{$stmt->rowCount()} venda de id {$id} e  quadrimestre {$quadrimestre} excluída com sucesso! Linhas afetadas: {$conexao->lastInsertId()}");
        }catch(PDOException $e) {
            responder(true, "Erro: Não foi possível efetuar a exclusão no BD".$e->getMessage().".");
        }
    }else 
        responder(true, "Erro: Não foi possível efetuar a exclusão. Informações incompletas enviadas".$e->getMessage().".");