<?php
// Exemplo 1
$i = 1;
while($i <= 10){
    echo $i++;
}

// Exemplo 2
$i = 1;
while($i <= 10):
    echo $i;
    $i++;
endwhile;
?>