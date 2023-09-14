<?php 
$vale = true;
$nvale = false;

if (is_bool($vale)) {
     echo "É verdadeiro <br>";
}

if (is_bool($nvale)) {
    echo "é Falso <br>";
}

if (is_bool(0 == false)) {
    echo "é Falso 2";
}



?>