<?php

function print_calls() {
    static $calls = 0;
    ++$calls;
    return $calls;
    // doute sur le return que j'ai gratté sur stackoverflow mais si je le retire ça affiche r dans le terminal
  }
  
  print_calls();
  print_calls();
  print_calls();
  echo print_calls(); 
  

?>