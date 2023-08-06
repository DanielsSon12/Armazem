<?php
//Equivalência de declaração
//1º Declaração
$ingredientes = array(
    'fruta' => 'maçã',
    'legume' => 'batata'
);

//A seguinte declaração é a mesma coisa da 1º declaração
$ingredientes['fruta'] = 'maçã';
$ingredientes['legume'] = 'batata';

//CHECANDO A EXISTÊNCIA OU NULIDADE DA CHAVE
$a = array('nome' => 'Fulano', 'celular' => null);

var_dump(isset($a['nome'])); //bool(true)
var_dump(isset($a['celular'])); //bool(false)
var_dump(isset($a['endereço'])); //bool(false)
?>