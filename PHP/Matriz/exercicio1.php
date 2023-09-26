<?php
//Criando um array de produtos
$produtos = array();
//Criando um array de frutas e preenchendo de uma forma especifica
$frutas = array();
$frutas[0] = "Maçã";
$frutas[] = "Banana";
//Criando um array completo
$legumes = array("Inhame", "Batata");
//Colocando os arrays $frutas e $legumes nas posições 0 e 1 de $produtos
array_push($produtos, $frutas, $legumes);
array_push($produtos, array("Couve", "Mostarda", "Rúcula"));
//Adicionando um legume na linha 1 e coluna 2 de produtos
$produtos[1][2] = "Cenoura";
//Adicionando uma 3º fruta ao array
$frutas[2] = "Laranja";
//Recolocando o array de frutas
$produtos[0] = $frutas;
print_r($produtos);
//Acessando uma posição específica do array
echo $produtos[2][1];
?>