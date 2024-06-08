<?php
   // Obtendo conexão com o BD
   require_once('../model/funcoesUtil.php');
   $conexao = getConexao();
   // Recupera o txt JSON via POST (Quando se envia via requisição AJAX, não temos $_POST)
   $pessoaPost = file_get_contents('php://input');
   // Decodifica o txt JSON p/uma matriz associativa (argumento true de json_decode)
   $pessoaMatriz = json_decode($pessoaPost,true);
   
   $nome_pessoa = (isset($pessoaMatriz["nome"])&& $pessoaMatriz["nome"]!= null)?
   strtoupper($pessoaMatriz["nome"]): "";
   $dataN_pessoa = (isset($pessoaMatriz["dataN_pessoa"]) && $pessoaMatriz["dataN_pessoa"]!=null) ?
   $pessoaMatriz["dataN_pessoa"] : "";
   $cpf_pessoa = (isset($pessoaMatriz["cpf_pessoa"]) && $pessoaMatriz["cpf_pessoa"]!= null)?
   $pessoaMatriz["cpf_pessoa"] : "";
   $endereco_pessoa = (isset($pessoaMatriz["endereco_pessoa"]) && $pessoaMatriz["endereco_pessoa"]!= null)?
   $pessoaMatriz["endereco_pessoa"] : "";
   if($nome_pessoa != "" && $dataN_pessoa != "" && $cpf_pessoa != "" && $endereco_pessoa != ""){
        try{
            $sql = "INSERT INTO pessoa(nome_pessoa,dataN_pessoa,cpf_pessoa,endereco_pessoa) VALUES(?,?,?,?)";
            // Prepara a instrução e em seguida passa os argumentos. Evitar SQL injection
            $stmt = $conexao->prepare($sql);
            // Método de verificação do objeto stmt
            $stmt->bindParam(1, $nome_pessoa);
            $stmt->bindParam(2, $dataN_pessoa);
            $stmt->bindParam(3, $cpf_pessoa);
            $stmt->bindParam(4, $endereco_pessoa);
            $stmt->execute();
            responder(false,"{$stmt->rowCount()} Pessoa inserida com sucesso! O id inserido foi {$conexao->lastInsertId()}");
        }catch(PDOException $e){
                responder(true,"Erro: Não foi possivel efetuar a inserção no BD" .$e->getMessage().".");
        }
     }
?>