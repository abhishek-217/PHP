<!-- BAsic of function -->

<?php
function getnumbig($a, $b)
{
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$max = getnumbig(52, 989);
echo "The bigger number is :" . $max;
?>