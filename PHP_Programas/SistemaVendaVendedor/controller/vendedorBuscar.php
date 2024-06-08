<?php
    require_once("../model/funcoesUtil.php");
    $conexao = getConexao();
    $id = (isset($_GET["id"]) && $_GET["id"] != null) ? intval($_GET["id"]) : "";

    if($id != ""){
        try{
            $sql = "SELECT * FROM vendedor WHERE id = ?";
            $stmt = $conexao->prepare($sql);
            $stmt -> bindParam(1, $id);
            $stmt -> execute();
            $vendedor = $stmt -> fetchAll(PDO::FETCH_ASSOC)[0];

            responder(false, "{$stmt -> rowCount()} vendedor(a) de id {$id} obtido(a) com sucesso!", $vendedor);
        } catch(PDOException $e) {
            responder(true, "Erro: Não foi possível buscar o(a) vendedor(a) no BD" . $e -> getMessage() . ".");
        }
    }else {
        responder(true, "Erro: Não foi possível buscar o(a) vendedor(a). Informações incompletas enviadas.");
    }
?>
