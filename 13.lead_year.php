<?php
$year = 1900;
if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0))
    echo "$year is a leap year.";
else
    echo "$year is normal year.";
// echo (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) ? "$year is a leap year." : "$year is normal year.";
?>