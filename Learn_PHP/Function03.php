<!-- Here see call by refrence -->

<?php
function add(&$num) {
    $num = $num + 1;
    
}
$num = 5;
add($num);
echo "The incremented number is: $num";
?>