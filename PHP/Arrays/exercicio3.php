<?php
$meuArray = array(
    'nome' => 'Fulano',
    'celular' => '999-0909',
    'idade' => 30
);

var_dump($meuArray); // Vai imprimir todo o array, detalhadamente

unset($meuArray['nome']); //unset serve para remover um elemento de um array, ou todo o array

echo "<br><br>";

var_dump($meuArray);
?>