<?php
//Exemplo 1
for($i = 1; $i <= 10; $i++){
    echo $i;
}

//Exemplo 2
for($i = 1; ;$i++){
    if($i > 10){
        break;
    }
    echo $i;
}

//Exemplo 3
$i = 1;
for(; ; ){
    if($i > 10){
        break;
    }
    echo $i;
    $i++;
}

//Exemplo 4
for($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

echo $j;
?>