<?php
    require_once("../model/funcoesUtil.php");

    $con = getConexao();

    $id = null;
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }else{
        responder(true, "Nenhum id foi recebido." );
    }

    try{
        $sql = "DELETE FROM pessoa WHERE id=?";
        $ps = $con->prepare($sql);
        $ps->bindParam(1, $id);
        $ps->execute();
        responder(false, "Removido com sucesso! " . $id);
    }catch(PDOException $error){
        responder(true, "Erro ao remover.");
    }
?>