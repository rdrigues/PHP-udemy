<?php 

function teste(){
    $valor = 1;
    echo "$valor <br>";
}
teste();
teste();
teste();

function testestatic(){  
    static $valorstatic = 1 + 2;
    $valorstatic++;
    echo "$valorstatic <br>";
}
testestatic();
testestatic();
testestatic();
?>