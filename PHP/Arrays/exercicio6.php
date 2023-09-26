<?php
function exibir($infos){
    foreach($infos as $chave => $valor){
        echo "$chave : $valor<br>";
    }
}

function exibirPorReferencia(&$infos){
    if(gettype($infos['salario']) === 'double'){
        $infos['salario'] += 1000;
    }
    echo "{$infos['nome']} : {$infos['salario']}<br>";
}

function exibirPorReferenciaComFor(&$infos){
    //Dentro do foreach você precisa ratificar a referência ao endereço de memória
    foreach($infos as $chave => &$valor){
        if(gettype($valor) === 'double'){
            $valor += 400;
        }
        echo "$chave : $valor<br>";
    }
}

$informacoes = array(
    'nome' => 'Rafael',
    'salario' => 2600.50
);

exibir($informacoes);
echo "Depois de executar a função exibir <br>";
var_dump($informacoes);
echo "<br><br>";

exibirPorReferencia($informacoes);
echo "Depois de executar a função exibirPorReferencia <br>";
print_r($informacoes);
echo "<br><br>";

exibirPorReferenciaComFor($informacoes);
echo "Depois de executar a função exibirPorReferenciaComFor <br>";
print_r($informacoes);
echo "<br><br>";
?>