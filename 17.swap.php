<?php
$a = 5;
$b = 6;
echo "The numbers are $a and $b<br>";
swap($a,$b);
echo "now The numbers are $a and $b";
function swap($a, $b)
{
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo "The numbers in function are $a and $b<br>";
}
?>