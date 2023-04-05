<?php
    $x;
    $i;

    echo "<h3> NUMERAÇÃO COM FOR: </h3><br>";

    for($i = 2; $i <= 28; $i += 2)
    {
        if(($i > 8 && $i < 18) || ($i > 22 && $i < 28))
        continue;
        echo "$i &nbsp";
    }
    echo "<br><hr>";
    echo "<h3> NUMERAÇÃO COM WHILE: </h3><br>";

    $i = 0;
    while($i <= 26)
    {
        $i += 2;
        if(($i > 8 && $i < 18) || ($i > 22 && $i < 28))
        continue;
        echo "$i &nbsp";
    }
?>