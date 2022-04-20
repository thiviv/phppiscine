<?php

function my_increment(&$a) {
    $a ++;
}

$a = 0;

my_increment($a);
my_increment($a);
my_increment($a);
print $a;

?>