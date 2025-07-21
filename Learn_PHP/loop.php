<?php
    $num =1;
    while($num <= 10) {
        echo "Number: $num <br>";
        $num++;
    }

    do{
        echo "This is a do-while loop.<br>";
        echo $num  ;

    }while($num <= 10);

    for($i=0; $i < 10; $i++) {
        echo "This is a for loop. Number: $i <br>";
    }

?>