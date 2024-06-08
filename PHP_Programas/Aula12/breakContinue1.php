<?php
$i = 0;
while(++$i){
    switch($i){
        case 5:
            echo "At 5 <br/> \n";
            break 1; //Sai do switch
        case 10:
            echo "At 10; quitting <br/> \n";
            break 2; //Esse último break sai do switch e do while
        default:
            break;
    }
}
?>