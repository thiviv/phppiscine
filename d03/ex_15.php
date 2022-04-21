<?php 

function teacher() {
    echo "I am a Teacher \n";
}

function student($name = "Axel") {
    echo "I am a student and my name is $name";
}


$func_teacher = "teacher";
$func_student = "student";
call_user_func($func_teacher);
call_user_func($func_student);


