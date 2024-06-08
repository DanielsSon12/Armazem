<?php
require_once("../model/funcoesUtil.php");

// Atribui a função getConexao() a uma variável para uma melhor manipulação
$conexao = getConexao();

try {
    $sql = "SELECT * FROM usuario";

    // Prepara a conexão com o sql e atribui essa conexão com sql a variável $stmt e depois ela é executada
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    // Transforma todos os dados do usuário em uma matriz associativa 
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Caso tenha sucesso ao listar todos os usuários
    responder(false, "Sucesso ao listar todos os usuarios!", $usuarios);
} catch (PDOException $e) {
    // Caso dê erro ao buscar o sucesso ao listar todos os usuários
    responder(true, "Erro ao listar todos os usuários.");
}
?>
