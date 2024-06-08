<?php
    // Obtendo conexão com o BD
    require_once("../model/funcoesUtil.php");
    // Solicitando a conexão com o bd
    // Atribui a função getConexao() a uma variável para uma melhor manipulação
    $conexao = getConexao();
    // Tente executar o comando de consulta na referida tabela
    try {
        $sql = "SELECT * FROM pessoa";
    
        // Prepara a conexão com o sql e atribui essa conexão com sql a variável $stmt e depois ela é executada
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        // Em caso de sucesso, envie as linhas da tabela pelo atributo dados de $resposta
        // Esses dados deverão estar no formato de matriz associativa (PDO::FETCH_ASSOC)
        // Transforma todos os dados da pessoa em uma matriz associativa 
        $pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        responder(false, "Sucesso ao listar todos as pessoas!", $pessoas);
    } catch (PDOException $e) {
        // Caso dê erro ao buscar o sucesso ao listar todos os pessoas
        responder(true, "Erro ao listar todos os pessoas.");
    }
?>