<?php
    
    $x;
    $i;
    
    for($i = 2; $i <= 20; $i += 2)
    {
        if($i > 8 && $i < 18)
        continue;
        echo "$i &nbsp";
    }
?>