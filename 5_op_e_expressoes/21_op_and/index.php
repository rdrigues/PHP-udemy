<?php

$a = 5;
$b = 10;
$c = 5;
$d = 12;

if($a == $c && $d > $b){
    echo "As duas operações sao verdadeiras <br>";
}


if(($a == $c && $d > $b) && ($b > $a)){
    echo "As duas operações sao verdadeiras";
}