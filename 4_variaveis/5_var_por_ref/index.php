<?php
$nome = "Diogo";
$nome2 =& $nome;


echo "O nome é $nome <br>";
echo "O nome é $nome2 <br>";

$nome2 = "jorjao";

echo "O nome é $nome <br>";
echo "O nome é $nome2 <br>";

$nome = "mario";


echo "O nome é $nome <br>";
echo "O nome é $nome2 <br>";

?>