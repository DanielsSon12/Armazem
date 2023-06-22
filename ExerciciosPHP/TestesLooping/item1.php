<?php
    $x;
    $i;
    $result;

    echo "TABUADA COM FOR: <br><br>";

    for($i = 1; $i < 11; $i++)
    {
        echo "A tabuada de $i é: <br><br>";
        for($x = 1; $x <11; $x++)
        {
            $result = $i * $x;
            echo "$result &nbsp;&nbsp;&nbsp;";
        }
        echo "<br><hr>";
    }

    echo "TABUADA COM DO WHILE: <br><br>";

    do {
        $i = 1;
        $x = 1;
        while($i < 11)
        {
            echo "A tabuada de $i é: <br><br>";
            $result = $i * $x;
            echo "$result &nbsp;&nbsp;&nbsp;";
            $i++;
        }
        echo "<br><hr>";
        $x++;
    } while ($x < 11);
?>