<?php
$i = 0;
for($i = 0; $i <= 100; $i++){
    if($i >= 20  && $i <= 90)
        continue;
    echo $i."<br>";
}
?>