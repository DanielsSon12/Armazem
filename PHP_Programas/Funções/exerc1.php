<?php
//______________FUNÇÕES ANÔNIMAS_______________\\
$precoDeCusto = 450.0;
$margemDeLucro = 25.0;

//Função comum
function calcularPrecoDevenda($custo, $margem){
    return $custo += (($custo * $margem) / 100);
}
echo "Resultado da função comum recebendo variáveis com valor como parâmetros:<br>";
var_dump(calcularPrecoDevenda($precoDeCusto, $margemDeLucro));
echo "<br><br>";

//Usando uma função anônima (lambda)
$precoDeVenda = function($custo, $margem){
    return $custo += (($custo * $margem) / 100);
};

//Vai imprimir a função --> Uma função anônima/lambda cujo tipo é um Clousure
echo "<br>Resultado da função anônima sem receber nenhum valor como parâmetro:<br>";
var_dump($precoDeVenda);
echo "<br><br>";

//Vai imprimir o resultado da chamada da função
echo "<br>Resultado da função anônima recebendo variáveis com valor como parâmetros:<br>";
var_dump($precoDeVenda($precoDeCusto, $margemDeLucro));
echo "<br><br>";

//Usando uma função anônima (closure)
$precoDeVendaClousure = function($custo) use($margemDeLucro){
    return $custo += (($custo * $margemDeLucro) / 100);
};

//Vai imprimir a função --> Uma função anônima/clousure cujo tipo é um Clousure
echo "<br>Resultado da função anônima cujo tipo tipo é um Clousure:<br>";
var_dump($precoDeVendaClousure);
echo "<br><br>";

//Vai imprimir o resultado da chamada da função recebendo apenas uma variável como argumento
echo "<br>Resultado da função anônima recebendo apenas uma variável como argumento:<br>";
var_dump($precoDeVendaClousure($precoDeCusto));
echo "<br><br>";

//Perceba que só passamos um argumento. A variável externa $margemDeLucro foi utilizada
echo "<br>Resultado da função anônima recebendo um valor para a variavel custo:<br>";
var_dump($precoDeVendaClousure(500.0)); //Passando um valor literal
//Perceba que só passamos um valor literal como argumento. A variável externa $margemDeLucro foi utilizada
?>