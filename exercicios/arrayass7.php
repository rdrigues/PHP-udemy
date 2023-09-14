<?php 
$pessoa1 = [
    'nome' => 'Diogo',
    'idade' => '20',
    'peso' => '76kg',
    'altura' => '1.78',
    'cor' => 'branca',
    'signo' => 'virgem',
];
$nome = $pessoa1['nome'];
$idade = $pessoa1['idade'];

if ($idade >= 18) {
    echo "$nome é maior de idade";
}





?>