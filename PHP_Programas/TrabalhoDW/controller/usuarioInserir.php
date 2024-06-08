<?php
    require_once('../model/funcoesUtil.php');
    $conexao = getConexao();
    $usuarioPost = file_get_contents('php://input');
    $usuarioMatriz = json_decode($usuarioPost, true);

    $nome_usuario = (isset($usuarioMatriz["nome"]) && $usuarioMatriz["nome"] != null) ?
        strtoupper($usuarioMatriz["nome"]) : "";
    $senha_usuario = (isset($usuarioMatriz["senha_usuario"]) && $usuarioMatriz["senha_usuario"] != null) ?
        $usuarioMatriz["senha_usuario"] : "";
    $email_usuario = (isset($usuarioMatriz["email_usuario"]) && $usuarioMatriz["email_usuario"] != null) ?
        $usuarioMatriz["email_usuario"] : "";

    if ($nome_usuario != "" && $senha_usuario != "" && $email_usuario != "") {
        try {
            $sql = "INSERT INTO usuario(nome_usuario,senha_usuario,email_usuario) VALUES(?,?,?)";
            //Prepara a instrução e em seguida passa os argumentos. Evitar SQL injection
            $stmt = $conexao->prepare($sql);
            //Método de verificação do objeto stmt
            $stmt->bindParam(1, $nome_usuario);
            $stmt->bindParam(2, $senha_usuario);
            $stmt->bindParam(3, $email_usuario);
            $stmt->execute();
            responder(false, "{$stmt->rowCount()} usuario inserido com sucesso! O id inserido foi {$conexao->lastInsertId()}");
        } catch (PDOException $e) {
            responder(true, "Erro: Não foi possivel efetuar a inserção no BD" . $e->getMessage() . ".");
        }
    }
