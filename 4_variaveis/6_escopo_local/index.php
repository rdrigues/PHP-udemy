<?php
$variavel = 10;
echo "$variavel global 1 <br>";

function teste(){
    $variavel = 10;
    echo "$variavel local 1 <br>";

}
teste();

echo "<br>";

$variavel = 50;

function teste1(){

    $variavel = 450;
    echo "$variavel local 2 <br>";

}

echo "$variavel global 2 <br>";
teste1();

?>