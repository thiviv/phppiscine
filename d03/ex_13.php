<?php

function my_swap_vars(&$a, &$b) {
    $c = $a;
    $a = $b;
    $b = $c;
}

$a = "slt";
$b = "cc";

my_swap_vars($a, $b);
print "$a $b";
?>