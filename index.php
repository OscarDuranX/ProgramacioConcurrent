<?php

function myecho($callaback) {
    if(is_callable($callaback)){
        call_user_func($callaback);
    } else {
        echo "myecho\n";
    }
}

function a(){
    echo "a\n";
}

myecho('a');

$x = 5;
myecho($x);