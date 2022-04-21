<?php

$func = function (){
    return ucfirst("jack"); //L'énoncé dit qu'il faut retourner, mais si je mets un echo ça marche nickel... à suivre
};

call_user_func($func);

?>
