<?php
//declaração de função com argumentos variáveis
function minha_funcao(): void{
    $meusArgumentos = func_get_args();
    var_dump($meusArgumentos);
    echo "<br>";
}

//chamada da função com argumentos variáveis
minha_funcao("Olá", "mundo");
minha_funcao("Rafael", 5, 8.9, false);
minha_funcao("teste", 7.4, 9.7);
minha_funcao();

?>