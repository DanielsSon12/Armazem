
<?php
//Para contar quantos elementos temos em um array usamos o sizeof ou count
$cores = array('Azul', 'Verde', 'Amarelo', 'Branco');
echo 'Total de cores: '.count($cores).'<br>'; // o resultado sera 4
echo 'Total de cores: '.sizeof($cores).'<br>'; // o resultado sera 4

echo'<br><br>';
//Para somar os elementos de um array usamos a função array_sum
$numeros = array(10, 20, 30);
echo array_sum($numeros)."<br/>"; // 60

echo'<br><br>';
//Para verificar a existência de um elemento no array usamos a função in_array
$cores = array('Azul', 'Verde', 'Amarelo', 'Branco');
echo in_array('Verde', $cores); //1
echo in_array('Grená', $cores); //Não vai imprimir nada

echo'<br><br>';
//Para inserir elementos no array usamos a função array_push
$cores = array('Azul', 'Verde', 'Amarelo', 'Branco');
array_push($cores, 'Vermelho');
array_push($cores, 'Cinza', 'Preto');

echo "Saída após array_push: <br>";
print_r($cores);

echo'<br>';

$cores[] = 'Vermelho';
$cores[] = 'Cinza';
$cores[] = 'Preto';

echo "Saída após as inclusões com []: <br>";
print_r($cores);

echo "<br><br>";
//Para retornarmos os elementos de um array em ordem numericamente utilizamos a função array_values
$meuArray = array(
    'fruta' => 'Maçã',
    'legume' => 'Batata',
    'cerveja' => 'Antártica'
);

print_r(array_values($meuArray));

echo "<br><br>";
?>