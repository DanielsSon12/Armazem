<?php
    function getConexao():PDO{
        $dsn='mysql:dbname=cinema;host=localhost;charset=utf8';
        $pdo = new PDO($dsn,'root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
        return $pdo;
    }

            //A variavel $ps vai armazenar a conexão ($con), que dentro dessa conexão vai ser preparado o sql ($sql);
            //E depois a variavel $ps vai ser executada;

            //A variavel $filmes vai guardar todos os filmes do banco de dados em pedaços por causa do (fetchALL);
            //E depois essa variavel vai virar uma matriz associativa com o (FETCH_ASSOC);
?>