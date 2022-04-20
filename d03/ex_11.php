<?php

$nb_a = 5;
$nb_b = 3;

function my_sub() {

    global $nb_a, $nb_b;

    $nb_a = $nb_a - $nb_b;

}

my_sub();
echo $nb_a;

?>