<?php
$teste = "Diogo";
echo "$teste <br>";


if (true){
    $teste = "Dioguinho";
    echo "$teste <br>";
}
 
echo "$teste <br>";

function teste(){
    $teste = "Diogâo";
    echo "$teste <br>";

}
teste();

echo "$teste <br>";

function teste1(){
    global $teste;
    echo "$teste <br>";

}
teste1()
?>