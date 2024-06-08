<?php
    function responder(bool $erro, string $msg, array $dados=null){
        //Definindo o formato e o tipo de acentuação da resposta que será enviado ao cliente
        header("Content-Type:application/json;charset=utf-8");
        //Definindo um array com os dados da resposta a ser enviada ao cliente
        $resposta = ["erro" => $erro, "msg" => $msg, "dados" => $dados];
        //Utilizando a função json_encode para transformar a resposta em um JSON serializado
        $respostaJSON = json_encode($resposta);
        //Já que o envio da resposta no formato JSON é a última etapa da comunicação com o cliente,
        //utilizamos die no lugar de echo.
        die($respostaJSON);
} 
    function getConexao(){
        // Declara uma conexão em pdo com valor null de início
        $pdo = null;
        try{
            $dsn = "mysql:host=localhost;dbname=pessoabd;charset=utf8";
            $pdo = new PDO($dsn, "root", "");
            // O pdo começa a funcionar aqui em modo de exceção
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Retorna a conexão via pdo
            return $pdo;
        }catch(PDOException $e){
            // Caso de erro em alguma etapa da conexão
            responder(true,"Erro ao conectar com o BD . {$e->getMessage()}");
        }
    }
?>